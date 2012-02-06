<?php

namespace Acme\DemoBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends BehatContext //MinkContext if you want to test web
{

	/**
	 * @Given /There is no "([^"]*)" in database/
	 */
	public function thereIsNoRecordInDatabase($entityName)
	{
		throw new \Behat\Behat\Exception\PendingException();
	}

    /**
     * @Given /I have a category "([^"]*)"/
     */
    public function iHaveACategory($name)
    {
		throw new \Behat\Behat\Exception\PendingException();
    }

    /**
     * @Given /I have a product "([^"]*)"/
     */
    public function iHaveAProduct($name)
    {
		throw new \Behat\Behat\Exception\PendingException();
    }

    /**
     * @When /I add product "([^"]*)" to category "([^"]*)"/
     */
    public function iAddProductToCategory($productName, $categoryName)
    {
		throw new \Behat\Behat\Exception\PendingException();

    }

    /**
     * @Then /I should find product "([^"]*)" in category "([^"]*)"/
     */
    public function iShouldFindProductInCategory($productName, $categoryName)
    {
		throw new \Behat\Behat\Exception\PendingException();
    }

    /**
     * Returns the Doctrine entity manager.
     *
     * @return Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        return $this->getContainer()->get('doctrine')->getEntityManager();
    }

    /**
     * Returns the Doctrine repository manager for a given entity.
     *
     * @param string $entityName The name of the entity.
     *
     * @return Doctrine\ORM\EntityRepository
     */
    protected function getRepository($entityName)
    {
        return $this->getEntityManager()->getRepository($entityName);
    }
}
