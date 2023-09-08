# app.rb

require 'sinatra'
require 'json'
require 'sinatra/cross_origin'

configure do
  enable :cross_origin
end

before do
  response.headers['Access-Control-Allow-Origin'] = 'http://localhost:3000'
end

items = [
  { id: 1, name: 'Item 1' },
  { id: 2, name: 'Item 2' },
  { id: 3, name: 'Item 3' }
]

before do
  content_type :json
end

get '/api/items' do
  items.to_json
end
