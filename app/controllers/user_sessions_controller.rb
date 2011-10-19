class UserSessionsController < ApplicationController
  before_filter :require_no_user,   :only => [:new] 
  before_filter :require_user,  :only => :destroy 
  
  def new 
    @user_session = UserSession.new 
  end 
  
  def create 
    logger.info params.inspect
    @user_session = UserSession.new(params[:user_session])
    
    if @user_session.save 
      respond_to do |format|
        text = "<p>Login as:&nbsp;<b>"  + current_user.name + "</b></p>"
        text += '<a href="/logout" class="TopButtons">Log out</a>'
        flash[:notice] = text 
        format.js {render :content_type => 'text/javascript'}
      end
    else 
      text = '<p><span style="color:red">';
      @user_session.errors.full_messages.each do |msg|
        text += msg + "<br></br>"
      end
      respond_to do |format|        
        flash[:notice] = "Error:&nbsp;" + text + "</span>" 
        logger.info flash[:notice]
        format.js {render :content_type => 'text/javascript'}
      end
    end
  end 
  
  def destroy 
    current_user_session.destroy 
    flash[:notice] = "Logout successful!" 
    redirect_to root_url
    #redirect_back_or_default new_admin_users_session_url 
  end 
end