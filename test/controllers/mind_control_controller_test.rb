require 'test_helper'

class MindControlControllerTest < ActionDispatch::IntegrationTest
  test "should get landing" do
    get mind_control_landing_url
    assert_response :success
  end

  test "should get first" do
    get mind_control_first_url
    assert_response :success
  end

  test "should get inventory" do
    get mind_control_inventory_url
    assert_response :success
  end

end
