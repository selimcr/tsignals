class PaymentsController < ApplicationController
  
  include ActiveMerchant::Billing::Integrations
  include ActiveMerchant::Billing
  
  def index    
  end
  
  def checkout
    setup_response = gateway.setup_purchase(5000,
      :ip                => request.remote_ip,
      :return_url        => url_for(:action => 'confirm', :only_path => false),
      :cancel_return_url => url_for(:action => 'index', :only_path => false)
    )
    redirect_to gateway.redirect_url_for(setup_response.token)
  end
  
  def confirm
    redirect_to :action => 'index' unless params[:token]

    details_response = gateway.details_for(params[:token])

    if !details_response.success?
      @message = details_response.message
      render :action => 'error'
      return
    end

    @address = details_response.address
  end
  
  def complete
    purchase = gateway.purchase(5000,
      :ip       => request.remote_ip,
      :payer_id => params[:payer_id],
      :token    => params[:token]
    )

    if !purchase.success?
      @message = purchase.message
      render :action => 'error'
      return
    end
  end
  
  ###############################
  def create
    @enrollment = current_user.enrollments.find(params[:id])
  end
  
  def notify
    notify = Paypal::Notification.new(request.raw_post)
    enrollment = Enrollment.find(notify.item_id)

    if notify.acknowledge
      @payment = Payment.find_by_confirmation(notify.transaction_id) ||
        enrollment.invoice.payments.create(:amount => notify.amount,
          :payment_method => 'paypal', :confirmation => notify.transaction_id,
          :description => notify.params['item_name'], :status => notify.status,
          :test => notify.test?)
      begin
        if notify.complete?
          @payment.status = notify.status
        else
          logger.error("Failed to verify Paypal's notification, please investigate")
        end
      rescue => e
        @payment.status = 'Error'
        raise
      ensure
        @payment.save
      end
    end
    render :nothing => true
  end
  
  private
  def gateway
    @gateway ||= PaypalExpressGateway.new(
      :login => 'tecnot_1316388556_biz_api1.t-signals.com',
      :password => '1316388590',
      :signature => 'Acz4l1IWcTvjXbsbSzZMxcoUKIdcA49jfxcuYeg.TwV6-i0V.IEqAPXz'
    )
  end
end
