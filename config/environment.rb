# Load the rails application
require File.expand_path('../application', __FILE__)

# Initialize the rails application
Tsignals::Application.initialize!

PAYPAL_ACCOUNT = 'selimd_1316382554_biz@gmail.com'
ActiveMerchant::Billing::Base.mode = :test
#unless Rails.env == 'production'
#  PAYPAL_ACCOUNT = 'selimd_1316382554_biz@gmail.com'
#  ActiveMerchant::Billing::Base.mode = :test
#else
#  PAYPAL_ACCOUNT = 'selimd_1316382554_biz@gmail.com'
#end