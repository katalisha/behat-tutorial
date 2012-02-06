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

	Scenario: A category contains more than 1 product
	  Given I have a category "Drinks"
	    And I have a product "Coca Cola"
	    And I have a product "Solo"
	   When I add product "Coca Cola" to category "Drinks"
	    And I add product "Solo" to category "Drinks"
	   Then I should find product "Coca Cola" in category "Drinks"
	    And I should find product "Solo" in category "Drinks"
	
	Scenario: A product is part of more than 1 category
	  Given I have a product "Coca Cola"
	    And I have a category "Drinks"
	    And I have a category "Sides"
	   When I add product "Coca Cola" to category "Drinks"
	    And I add product "Coca Cola" to category "Sides"
	   Then I should find product "Coca Cola" in category "Drinks"
	    And I should find product "Coca Cola" in category "Sides"