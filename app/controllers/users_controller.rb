class UsersController < ApplicationController
  
  before_filter :require_user,  :only => [:show, :edit, :update, :account]
  before_filter :require_no_user,  :only => [:register, :new]
  
  def index
    @users = User.find(:all)
  end
  
  def new
    @user_session = UserSession.new  unless current_user
    @user = User.new 
  end 
  
  def create 
    @user = User.new(params[:user]) # Saving without session maintenance to skip # auto-login which can't happen here because # the User has not yet been activated     
    if @user.save 
      flash[:notice] = "Your account has been created." 
      redirect_to admin_users_url 
    else 
      flash[:notice] = "There was a problem creating you." 
      render :action => :new 
    end 
  end 
  
  def register 
    @user = User.new(params[:user]) # Saving without session maintenance to skip # auto-login which can't happen here because # the User has not yet been activated     
    @user.role = "admin"
    if @user.save 
      flash[:notice] = "Your account has been created." 
      redirect_to root_url 
    else 
      flash[:notice] = "There was a problem creating you." 
      @user_session = UserSession.new  unless current_user
      render :action => :new 
    end 
  end 
  
  def show 
    @user = User.find(params[:id])
  end 
  
  def edit 
    @user = User.find(params[:id])
  end 
  
  def update 
    @user = User.find(params[:id]) # makes our views "cleaner" and more consistent 
    if @user.update_attributes(params[:user]) 
      flash[:notice] = "Account updated!" 
      redirect_to admin_users_url 
    else 
      render :action => :edit 
    end 
  end
  
  def delete
    @user = User.find(params[:id]) # makes our views "cleaner" and more consistent 
    if (@user.destroy) 
      flash[:notice] = "Account deleted!" 
      redirect_to admin_users_url 
    else 
      render :action => :index 
    end 
  end
  
  def account
    
  end
end