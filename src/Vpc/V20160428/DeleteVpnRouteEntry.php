<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DeleteVpnRouteEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getWeight()
 * @method string getVpnGatewayId()
 * @method string getOwnerId()
 * @method string getRouteDest()
 * @method string getNextHop()
 */
class DeleteVpnRouteEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $weight
     *
     * @return $this
     */
    public function withWeight($weight)
    {
        $this->data['Weight'] = $weight;
        $this->options['query']['Weight'] = $weight;

        return $this;
    }

    /**
     * @param string $vpnGatewayId
     *
     * @return $this
     */
    public function withVpnGatewayId($vpnGatewayId)
    {
        $this->data['VpnGatewayId'] = $vpnGatewayId;
        $this->options['query']['VpnGatewayId'] = $vpnGatewayId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $routeDest
     *
     * @return $this
     */
    public function withRouteDest($routeDest)
    {
        $this->data['RouteDest'] = $routeDest;
        $this->options['query']['RouteDest'] = $routeDest;

        return $this;
    }

    /**
     * @param string $nextHop
     *
     * @return $this
     */
    public function withNextHop($nextHop)
    {
        $this->data['NextHop'] = $nextHop;
        $this->options['query']['NextHop'] = $nextHop;

        return $this;
    }
}