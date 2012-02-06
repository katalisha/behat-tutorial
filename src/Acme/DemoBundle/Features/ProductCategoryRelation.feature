Feature: Product Category Relationship
  	In order to setup a valid catalog
  	As a developer
  	I need a working relationship
	
	Background:
	  Given There is no "Product" in database
	    And There is no "Category" in database
  	
  	Scenario: A category contains a product
	  Given I have a category "Drinks"
	    And I have a product "Coca Cola"
	   When I add product "Coca Cola" to category "Drinks"
	   Then I should find product "Coca Cola" in category "Drinks"