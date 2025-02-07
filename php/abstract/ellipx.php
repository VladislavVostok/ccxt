<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class ellipx extends \ccxt\Exchange {
    public function _rest_get_market($params = array()) {
        return $this->request('Market', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function _rest_get_market_currencypair($params = array()) {
        return $this->request('Market/{currencyPair}', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function _rest_get_crypto_token_info($params = array()) {
        return $this->request('Crypto/Token/Info', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_market_currencypair_getdepth($params = array()) {
        return $this->request('Market/{currencyPair}:getDepth', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_market_currencypair_ticker($params = array()) {
        return $this->request('Market/{currencyPair}:ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_market_currencypair_gettrades($params = array()) {
        return $this->request('Market/{currencyPair}:getTrades', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_market_currencypair_getgraph($params = array()) {
        return $this->request('Market/{currencyPair}:getGraph', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_cmc_summary($params = array()) {
        return $this->request('CMC:summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_cmc_currencypair_ticker($params = array()) {
        return $this->request('CMC/{currencyPair}:ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_user_wallet($params = array()) {
        return $this->request('User/Wallet', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_market_currencypair_order($params = array()) {
        return $this->request('Market/{currencyPair}/Order', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_market_order_orderuuid($params = array()) {
        return $this->request('Market/Order/{orderUuid}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_market_currencypair_trade($params = array()) {
        return $this->request('Market/{currencyPair}/Trade', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_market_tradefee_query($params = array()) {
        return $this->request('Market/TradeFee:query', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_unit_currency($params = array()) {
        return $this->request('Unit/{currency}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_crypto_token_currency($params = array()) {
        return $this->request('Crypto/Token/{currency}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_crypto_token_currency_chains($params = array()) {
        return $this->request('Crypto/Token/{currency}:chains', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_post_market_currencypair_order($params = array()) {
        return $this->request('Market/{currencyPair}/Order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_crypto_address_fetch($params = array()) {
        return $this->request('Crypto/Address:fetch', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_crypto_disbursement_withdraw($params = array()) {
        return $this->request('Crypto/Disbursement:withdraw', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_delete_market_order_orderuuid($params = array()) {
        return $this->request('Market/Order/{orderUuid}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function _restGetMarket($params = array()) {
        return $this->request('Market', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function _restGetMarketCurrencyPair($params = array()) {
        return $this->request('Market/{currencyPair}', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function _restGetCryptoTokenInfo($params = array()) {
        return $this->request('Crypto/Token/Info', '_rest', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetMarketCurrencyPairGetDepth($params = array()) {
        return $this->request('Market/{currencyPair}:getDepth', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetMarketCurrencyPairTicker($params = array()) {
        return $this->request('Market/{currencyPair}:ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetMarketCurrencyPairGetTrades($params = array()) {
        return $this->request('Market/{currencyPair}:getTrades', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetMarketCurrencyPairGetGraph($params = array()) {
        return $this->request('Market/{currencyPair}:getGraph', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetCMCSummary($params = array()) {
        return $this->request('CMC:summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetCMCCurrencyPairTicker($params = array()) {
        return $this->request('CMC/{currencyPair}:ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetUserWallet($params = array()) {
        return $this->request('User/Wallet', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetMarketCurrencyPairOrder($params = array()) {
        return $this->request('Market/{currencyPair}/Order', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetMarketOrderOrderUuid($params = array()) {
        return $this->request('Market/Order/{orderUuid}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetMarketCurrencyPairTrade($params = array()) {
        return $this->request('Market/{currencyPair}/Trade', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetMarketTradeFeeQuery($params = array()) {
        return $this->request('Market/TradeFee:query', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetUnitCurrency($params = array()) {
        return $this->request('Unit/{currency}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetCryptoTokenCurrency($params = array()) {
        return $this->request('Crypto/Token/{currency}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetCryptoTokenCurrencyChains($params = array()) {
        return $this->request('Crypto/Token/{currency}:chains', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privatePostMarketCurrencyPairOrder($params = array()) {
        return $this->request('Market/{currencyPair}/Order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostCryptoAddressFetch($params = array()) {
        return $this->request('Crypto/Address:fetch', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostCryptoDisbursementWithdraw($params = array()) {
        return $this->request('Crypto/Disbursement:withdraw', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteMarketOrderOrderUuid($params = array()) {
        return $this->request('Market/Order/{orderUuid}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
}
