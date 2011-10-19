class WebsiteController < ApplicationController
 
  
  def index
    @user_session = UserSession.new  unless current_user
  end
  
   def why_register
    @user_session = UserSession.new  unless current_user
  end
end
