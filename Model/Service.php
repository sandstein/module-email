<?php
namespace Swissup\Email\Model;

use Magento\Framework\Mail\MessageInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

use Swissup\Email\Api\Data\ServiceInterface;
use Magento\Framework\Object\IdentityInterface;

class Service extends \Magento\Framework\Model\AbstractModel implements ServiceInterface, IdentityInterface
{
    /**
     * cache tag
     */
    const CACHE_TAG = 'email_service';

    /**
     * @var string
     */
    protected $_cacheTag = 'email_service';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'email_service';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Swissup\Email\Model\Resource\Service');
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get id
     *
     * return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Get name
     *
     * return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get status
     *
     * return int
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Get type
     *
     * return int
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * Get email
     *
     * return string
     */
    public function getEmail()
    {
        return $this->getData(self::USER);
    }

    /**
     * Get host
     *
     * return string
     */
    public function getHost()
    {
        return $this->getData(self::HOST);
    }

    /**
     * Get user
     *
     * return string
     */
    public function getUser()
    {
        return $this->getData(self::USER);
    }

    /**
     * Get password
     *
     * return string
     */
    public function getPassword()
    {
        return $this->getData(self::PASSWORD);
    }

    /**
     * Get port
     *
     * return int
     */
    public function getPort()
    {
        return $this->getData(self::PORT);
    }

    /**
     * Get secure
     *
     * return int
     */
    public function getSecure()
    {
        return $this->getData(self::SECURE);
    }

    /**
     * Get auth
     *
     * return string
     */
    public function getAuth()
    {
        return $this->getData(self::AUTH);
    }

    /**
     * Get key
     *
     * return string
     */
    public function getKey()
    {
        return $this->getData(self::KEY);
    }

    /**
     * Get remove
     *
     * return string
     */
    public function getRemove()
    {
        return $this->getData(self::REMOVE);
    }

    /**
     * Set id
     *
     * @param int $id
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set name
     *
     * @param string $name
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set status
     *
     * @param int $status
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Set type
     *
     * @param int $type
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
    }

    /**
     * Set email
     *
     * @param string $email
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::USER, $email);
    }

    /**
     * Set host
     *
     * @param string $host
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setHost($host)
    {
        return $this->setData(self::HOST, $host);
    }

    /**
     * Set user
     *
     * @param string $user
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setUser($user)
    {
        return $this->setData(self::USER, $user);
    }

    /**
     * Set password
     *
     * @param string $password
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setPassword($password)
    {
        return $this->setData(self::PASSWORD, $password);
    }

    /**
     * Set port
     *
     * @param int $port
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setPort($port)
    {
        return $this->setData(self::PORT, $port);
    }

    /**
     * Set secure
     *
     * @param int $secure
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setSecure($secure)
    {
        return $this->setData(self::SECURE, $secure);
    }

    /**
     * Set auth
     *
     * @param string $auth
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setAuth($auth)
    {
        return $this->setData(self::AUTH, $auth);
    }

    /**
     * Set key
     *
     * @param string $key
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setKey($key)
    {
        return $this->setData(self::KEY, $key);
    }

    /**
     * Set remove
     *
     * @param string $remove
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setRemove($remove)
    {
        return $this->setData(self::REMOVE, $remove);
    }
}