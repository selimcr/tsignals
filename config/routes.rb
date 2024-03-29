Tsignals::Application.routes.draw do
  # The priority is based upon order of creation:
  # first created -> highest priority.

  # Sample of regular route:
  #   match 'products/:id' => 'catalog#view'
  # Keep in mind you can assign values other than :controller and :action

  # Sample of named route:
  #   match 'products/:id/purchase' => 'catalog#purchase', :as => :purchase
  # This route can be invoked with purchase_url(:id => product.id)

  # Sample resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Sample resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Sample resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Sample resource route with more complex sub-resources
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', :on => :collection
  #     end
  #   end

  # Sample resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end

  # You can have the root of your site routed with "root"
  # just remember to delete public/index.html.
  root :to => "website#index"
  
  resources :user_sessions
  resources :users # give us our some normal resource routes for users resource :user, :as => 'account' # a convenience route match 'signup' => 'users#new', :as => :signup
  match '/logout' => "user_sessions#destroy", :as => "logout"
  match '/why_register' => "website#why_register", :as => "why_register"
  match '/user_sessions/create' => "user_sessions#create"
  match '/register' => "users#new"  
  match '/users/register' => "users#register"
  match '/account' => "users#account"
  
  match '/payments/notify' => "payments#notify"
  match '/payments/create' => "payments#create"
  match '/payments/' => "payments#index"
  match '/payments/checkout' => "payments#checkout"
  match '/payments/confirm' => "payments#confirm"
  match '/payments/complete' => "payments#complete"
  #namespace do
    # Directs /admin/products/* to Admin::ProductsController
    # (app/controllers/admin/products_controller.rb)
    #resources :products
    #resources :user_sessions
    #resources :users # give us our some normal resource routes for users resource :user, :as => 'account' # a convenience route match 'signup' => 'users#new', :as => :signup
   
    #match '/login' => "website#create", :as => "login"
    #match '/logout' => "user_sessions#destroy", :as => "logout"
    #match '/dashboard' => "dashboard#show", :as => "dashboard"
    #resource :user, :as => 'account' # a convenience route 
    #match 'signup' => 'users#new', :as => :signup
  #end
  # See how all your routes lay out with "rake routes"

  # This is a legacy wild controller route that's not recommended for RESTful applications.
  # Note: This route will make all actions in every controller accessible via GET requests.
  # match ':controller(/:action(/:id(.:format)))'
end
