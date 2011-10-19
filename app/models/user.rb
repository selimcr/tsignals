class User < ActiveRecord::Base 
  acts_as_authentic do |c|
    c.merge_validates_uniqueness_of_email_field_options({:scope => "role"})
  end 
  
  ROLES = %w(user admin)

  scope :alphabetical, :order => ["users.name ASC"]
  scope :active, :conditions => ["users.:expiration_at > today()"]
  scope :admins, :conditions => ["users.role = ?", 'admin']
  scope :users, :conditions => ["users.role = ?", 'user']
  
  validates :name, :presence => true
  #validates_presence_of :name
  validates_confirmation_of :email, :on => :create
  validates_inclusion_of :role, :in => ROLES
    
  # Class Methods
  #########################################

  def self.roles_to_select_option_collection
    ROLES.map{|r| [r.titleize, r]}
  end 
  
  # Instance Methods
  #########################################

  def is_admin?
    role == "admin"
  end
end