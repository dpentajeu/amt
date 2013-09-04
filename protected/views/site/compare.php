<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="container">
    <div id="content" class="wrap">                                           

        <div class="marginBottom30 clearFix">

            <div class="col1-4">
                <h2>Advantages</h2>
                <ul>
                    <li>
                        <a href="<?= $baseUrl; ?>/industryleader" class="more">Industry Leader</a>
                    </li>
                    <li>
                        <a href="<?= $baseUrl; ?>/compare" class="more">Compare Execution Types</a>
                    </li>
                    <li>
                        <a href="<?= $baseUrl; ?>/pricing" class="more">Forex Spreads Pricing</a>
                    </li>
                    <li>
                        <a href="<?= $baseUrl; ?>/tradingtools" class="more">Forex Trading Tools</a>
                    </li>
                </ul>
                
            </div>

            <div class="col3-4">
                <h2 class="separate">Compare Execution Types</h2>

                <h3 class="lead-in">AMT Market has two types of forex execution: No Dealing Desk (NDD) and Dealing Desk. The execution you choose impacts your trading experience and spreads. We recommend NDD execution because we believe it provides our best all-around trading experience. To determine which execution offering is best for you, please consult the table below.</h3>

                    <table id="gradient-style" style="width:100%; margin-left: 0px;">
                        <tbody><tr class="table-title contains-3 tall-row align-top">
                            <td class="unit">&nbsp;</td>
                            <td class="unit dark">
                                                <span class="txt-15">No Dealing Desk</span><br>
                                                <span class="txt-10 txt-Verdana-regular txt-no-caps txt-light-grey">(Recommended)</span>
                                        </td>
                            <td class="unit">
                                                <span class="txt-15">Dealing Desk</span><br>
                                                <span class="txt-10 txt-Verdana-regular txt-no-caps txt-light-grey">12 Most Popular Pairs</span>
                                        </td>
                        </tr>
                        <tr>
                            <th>General</th>
                            <th class="dark">&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <tr>
                            <td><strong>Maximum Balance</strong></td>
                            <td class="dark">None</td>
                            <td>$25,000</td>
                        </tr>
                        <tr class="light">
                            <td><strong>Maximum Trade Size</strong></td>
                            <td class="dark">50 Million</td>
                            <td>50 Million</td>
                        </tr>
                        <tr>
                            <td><strong>Price Feed</strong></td>
                            <td class="dark"><a href="#price-feed-ndd" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#price-feed-ndd_1&quot;;return this.s_oc?this.s_oc(e):true">NDD</a></td>
                            <td><a href="#price-feed-dd" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#price-feed-dd_1&quot;;return this.s_oc?this.s_oc(e):true">Dealing Desk</a></td>
                        </tr>
                        <tr class="light tall-row">
                            <td><strong>Spreads</strong></td>
                            <td class="dark">EUR/USD 2.7  pips<br><a href="#spreads-table" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#spreads-table_1&quot;;return this.s_oc?this.s_oc(e):true">View All</a></td>
                            <td>EUR/USD 1.6  pips<br><a href="#spreads-table" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#spreads-table_2&quot;;return this.s_oc?this.s_oc(e):true">View All</a></td>
                        </tr>
                        <tr>
                            <th><strong>Order Execution</strong></th>
                            <th class="dark">&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <tr class=" align-top">
                            <td><strong>Re-Quote Orders<sup>1</sup></strong></td>
                            <td class="dark"><strong>No</strong><br>FXCM does not re-quote orders or manipulate market prices.</td>
                            <td><strong>No</strong><br>FXCM does not re-quote orders or manipulate market prices.</td>
                        </tr>
                        <tr class="light align-top">
                            <td><strong>Conflict of Interest</strong></td>
                            <td class="dark"><strong>No</strong><br>FXCM cannot profit from the trading losses of its clients.</td>
                            <td><strong>Yes</strong><br>
                            FXCM can profit from the trading losses of its clients on some currency pairs.</td>
                        </tr>
                        <tr class="align-top">
                            <td><strong>Anonymous Orders</strong></td>
                            <td class="dark"><strong>Yes</strong><br>
                                FXCM’s liquidity providers  cannot see your stop, limit and entry orders.</td>
                            <td><strong>No</strong><br>
                                FXCM can see your stop,  limit and entry orders, but FXCM does not re-quote orders or manipulate prices.</td>
                        </tr>
                        <tr class="light align-top">
                            <td><strong>Partial Fills</strong></td>
                            <td class="dark"><strong>Yes</strong><br>
                                Orders can be broken up and  filled at multiple prices (at your discretion).</td>
                            <td><strong>Yes</strong><br>
                                Orders can be broken up and  filled at multiple prices (at your discretion).</td>
                        </tr>
                        <tr>
                            <th>Strategies</th>
                            <th class="dark">&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <tr class="align-top">
                            <td><strong>Scalping</strong></td>
                            <td class="dark"><strong>Yes</strong><br>Scalp the market with no restrictions.</td>
                            <td><strong>Yes</strong><br>Scalping is allowed, but FXCM reserves the right to manage its risk by <a href="#scalping-dd" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#scalping-dd_1&quot;;return this.s_oc?this.s_oc(e):true">changing your execution type</a>.</td>
                        </tr>
                        <tr class="light align-top">
                            <td><strong>News Trading</strong></td>
                            <td class="dark"><strong>Yes</strong><br>Trade news events with no restrictions.</td>
                            <td><strong>Yes</strong><br>News trading is allowed, but FXCM reserves the right to manage its risk by <a href="#news-trading-dd" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#news-trading-dd_1&quot;;return this.s_oc?this.s_oc(e):true">changing your execution type</a>.</td>
                        </tr>
                        <tr class="align-top">
                            <td><strong>Automation (e.g. EAs)</strong></td>
                            <td class="dark"><strong>Yes</strong><br>Automate your trading with no restrictions. Use any EA.</td>
                            <td><strong>Yes</strong><br>Automated trading is allowed, but FXCM reserves the right to manage its risk by <a href="#automation-dd" class="cb-html cboxElement" onclick="s_objectID=&quot;http://www.fxcm.com/advantages/forex-execution/compare-execution-types/#automation-dd_1&quot;;return this.s_oc?this.s_oc(e):true">changing your execution type</a>.</td>
                        </tr>
                        <tr class="light align-top">
                            <td><strong>API Trading</strong></td>
                            <td class="dark"><strong>Yes</strong><br>Trade with APIs and no restrictions.</td>
                            <td><strong>Yes</strong><br>
                                Trade with APIs, but AMT  reserves the right to manage its risk by changing your execution type to NDD.</td>
                        </tr>
                    </tbody></table>


                <div id="price-feed-ndd" class="cb-content cb-content-html">
                    <p>The No Dealing Desk (NDD) price feed comes from many liquidity providers who compete with one another for FXCM order flow. These liquidity providers include global banks, financial institutions, and other market makers. At any given time, the NDD price feed automatically streams the best bid and best ask prices to FXCM platforms, which includes FXCM's markup which may vary based on account type and liquidity provider. This efficient selection method inhibits a single liquidity provider from adversely affecting FXCM's NDD price feed. The more advantageous their prices are, the more order flow the liquidity provider receives. The less advantageous their prices are, the less order flow they receive. We believe FXCM's NDD prices are the most competitive, market-driven, and fair.</p>
                </div>

                <div id="price-feed-dd" class="cb-content cb-content-html">
                    <p>Dealing Desk execution is used by many brokers in the forex industry. However, FXCM's Dealing Desk execution offering is unique because it shares important features with our No Dealing Desk (NDD) execution. FXCM's dealing desk execution option is able to offer spreads for FXCM's 12 most popular currency pairs that may be up to one pip lower than those provided by the No Dealing Desk (NDD) model. While FXCM believes that NDD execution provides the best all-around trading experience, we also offer dealing desk execution as an option for traders whose primary concern is low spreads on FXCM's 12 most popular currency pairs.</p>
                </div>

                <div id="spreads-table" class="cb-content cb-content-html">
                    <p>On AMT's 12 most popular currency pairs, the Dealing Desk execution offers competitive spreads that may be up to one pip lower than FXCM's No Dealing Desk (NDD) spreads. FXCM does not, however, guarantee that quotes, prices or spreads will always be better on one form of execution as compared to the other. Please note that for all other pairs, spreads, quotes, or prices may, at times, be less competitive on Dealing Desk execution.</p>
                    <div class="table-wrap">
                        <table id="gradient-style" style="width:100%; margin-left: 0px;">
                            <tbody><tr>
                                <th>&nbsp;</th>
                                <th><strong>No Dealing Desk</strong></th>
                                <th><strong>Dealing Desk</strong></th>
                            </tr>
                            <tr>
                                <td><strong>EUR/USD</strong></td>
                                <td>2.7  pips</td>
                                <td>1.6  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>AUD/USD</strong></td>
                                <td>2.6  pips</td>
                                <td>1.5  pips</td>
                            </tr>
                            <tr>
                                <td><strong>GBP/USD</strong></td>
                                <td>2.8  pips</td>
                                <td>1.7  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>GBP/JPY</strong></td>
                                <td>4.8  pips</td>
                                <td>3.6  pips</td>
                            </tr>
                            <tr>
                                <td><strong>NZD/USD</strong></td>
                                <td>2.9  pips</td>
                                <td>1.8  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>USD/JPY</strong></td>
                                <td>2.5  pips</td>
                                <td>1.4  pips</td>
                            </tr>
                            <tr>
                                <td><strong>USD/CHF</strong></td>
                                <td>2.7  pips</td>
                                <td>1.6  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>EUR/CHF</strong></td>
                                <td>3.0  pips</td>
                                <td>1.8  pips</td>
                            </tr>
                            <tr>
                                <td><strong>USD/CAD</strong></td>
                                <td>2.6  pips</td>
                                <td>1.6  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>EUR/GBP</strong></td>
                                <td>2.6  pips</td>
                                <td>1.5  pips</td>
                            </tr>
                            <tr>
                                <td><strong>EUR/JPY</strong></td>
                                <td>3.4  pips</td>
                                <td>2.0  pips</td>
                            </tr>
                            <tr class="light">
                                <td><strong>AUD/JPY</strong></td>
                                <td>3.3  pips</td>
                                <td>2.0  pips</td>
                            </tr>
                        </tbody></table>
                    </div>
                    <span class="tableUpdate">Updated: April 2013</span>
                    <p class="margin-top note"><strong>Advertised Spreads:</strong> FXCM spreads are variable. The spreads listed here were derived from the time-weighted average of the spreads from April 7, 2013&nbsp;to April 19, 2013. Advertised spreads may not be applicable to client accounts of referring brokers. FXCM strives to provide traders with tight, competitive spreads; however, there may be instances when market conditions cause spreads to widen beyond the spreads displayed here. For additional information, <a href="#">click here</a>.</p> 
                    <p class="note"><strong>Compensation:</strong> When executing customers trades, FXCM can be compensated in several ways, which include, but are not limited to: adding a mark-up to the spreads it receives from its liquidity providers, receiving compensation for order flow, and charging commission to accounts that trade with FXCM's lowest spreads which are available to qualifying accounts. Under the Dealing Desk execution model, FXCM may act as a dealer and may receive additional compensation from trading. 
                </p> 
                </div>

                <div id="scalping-dd" class="cb-content cb-content-html">
                    <p>High frequency trading strategies increase a Dealing Desk's short-term risk by making it difficult for the Dealing Desk to offset that risk in the underlying market. When this occurs most Dealing Desks will intervene in your trades, re-quoting orders or manipulating prices and spreads. We do not manipulate prices or spreads, and we do not re-quote your orders.</p>
                    <p><strong>If you are trading on Dealing Desk execution and your trading style exposes us to more risk than we're comfortable with, FXCM may, at our sole discretion and at any time, change your execution type to NDD where there are no restrictions on the trading style or strategy that you can use.  This is how FXCM can comfortably offer both options without having to resort to the active "dealing intervention" which takes place at many forex brokers.</strong></p>
                </div>

                <div id="news-trading-dd" class="cb-content cb-content-html">
                    <p>Some strategies that trade the news can cause problems for dealing desks. They reduce the amount of time that a dealing desk has to hedge its trading risk. When this happens, a dealing desk will often begin re-quoting orders, which gives them more time to manage their trades and changes the market price to one that is more advantageous for their positions. But clearly, this is not beneficial for you.</p>
                    <p><strong>FXCM's dealing desk is different. We do not re-quote orders or manipulate market prices. If your trading style exposes us to more risk than we care to manage, we will simply change your forex execution type to No Dealing Desk.</strong></p>
                </div>

                <div id="automation-dd" class="cb-content cb-content-html">
                    <p>Some automated trading strategies, especially those that trade at a high frequency or scalp the market, can cause problems for dealing desks. They reduce the amount of time that a dealing desk has to hedge its trading risk. When this happens, a dealing desk will often begin re-quoting orders, which gives them more time to manage their trades and changes the market price to one that is more advantageous for their positions. But clearly, this is not beneficial for you.</p>
                    <p><strong>FXCM's dealing desk is different. We do not re-quote orders or manipulate market prices. If your trading style exposes us to more risk than we care to manage, we will simply change your forex execution type to No Dealing Desk.</strong></p>
                </div>

                <!-- content.disclaimerExists: true -->


                <div class="note-wrap has-bdr"> <b class="bdr bdr-top bdr-dash"></b>
                        <p class="note"><sup>1</sup> FXCM maintains a no re-quote policy. Circumstances exist based on order size, trading pattern, and market conditions where individuals may not receive execution at the requested rate. Orders are executed at the next available rate within the trader's parameters, subject to market conditions. The difference between the requested rate and final execution price may be more or less advantageous based on the market activity and available liquidity. </p>
                        <p class="note"><strong>Dealing Desk Disclaimer</strong><br>
                On the Dealing Desk execution model FXCM can act as the dealer on some currency pairs. There are also back up liquidity providers that fill in whenever FXCM does not act as the dealer. Please note that FXCM’s Dealing Desk employs fewer liquidity providers than the No Dealing Desk (NDD) execution option.  FXCM does not guarantee that quotes, prices, or spreads will always be better on one form of execution as compared to the other.  Customers should consider many factors when deciding which execution type best suits their needs (e.g., conflict of interest, trading style or strategy, etc.).  For more information, see our <a href="#" >Execution Risks</a>. </p>
                    <p class="note"><strong>Advertised Spreads:</strong> FXCM spreads are variable. The spreads listed here were derived from the time-weighted average of the spreads from April 7, 2013&nbsp;to April 19, 2013. Advertised spreads may not be applicable to client accounts of referring brokers. FXCM strives to provide traders with tight, competitive spreads; however, there may be instances when market conditions cause spreads to widen beyond the spreads displayed here. For additional information, <a href="#">click here</a>.</p>
                </div>

            </div>
        </div>          
    </div>
</div>