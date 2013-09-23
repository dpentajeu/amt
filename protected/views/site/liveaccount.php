<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="container">
    <div id="content" class="wrap">                                           

        <div class="marginBottom30 clearFix">

            <div class="col1-4">
                <h2>Account</h2>
                <ul>
                    <li>
                        <a href="<?= $baseUrl; ?>/demoaccount" class="more">Demo account</a>
                    </li>
                    <li>
                        <a href="<?= $baseUrl; ?>/liveaccount" class="more">Live account</a>
                    </li>
                </ul>
                <br/>
                <a href="http://www.metatrader4.com/" target="_blank"><img src="<?= $baseUrl ?>/images/ads_1.jpg"></a>
            </div>

            <div class="col3-4">
                <h2 class="separate">Open an individual live account</h2>
                    <h4>Personal details</h4>

                    <form>
                        <span id="error" style="color:red"></span>
                        <div class="control-group ">
                            <label class="control-label">First Name:*</label>
                            <div class="controls">
                              <input name="LiveForm[firstName]" id="LiveForm_firstName" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Last Name:*</label>
                          <div class="controls">
                            <input name="LiveForm[lastName]" id="LiveForm_lastName" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Id/Passport No.:*</label>
                          <div class="controls">
                            <input name="LiveForm[id]" id="LiveForm_id" type="text">
                            </div>
                            <span>* Id/Passport no documents are required to upload later.</span>
                        </div>
                        <div class="control-group">
                         <label class="control-label">Gender:*</label>
                           <div class="controls">
                             <select name="LiveForm[gender]" id="LiveForm_gender">
                                <option value="">Select a gender</option>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                                </select>                          
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Email:*</label>
                          <div class="controls">
                            <input name="LiveForm[email]" id="LiveForm_email" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Contact:*</label>
                          <div class="controls">
                            <input name="LiveForm[tel]" id="LiveForm_tel" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Address:*</label>
                          <div class="controls">
                            <input name="LiveForm[address]" id="LiveForm_address" type="text">
                            </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Country:*</label>
                            <div class="controls">
                              <select name="LiveForm[country]" id="LiveForm_country">
                                <option value="">Select a country</option>
                                <option value="China">China</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Thailand">Thailand</option>
                                </select>
                            </div>
                        </div>
                        <br/>
                        <h4>Account details</h4>
                        <div class="control-group ">
                          <label class="control-label">Username:*</label>
                          <div class="controls">
                            <input name="LiveForm[username]" id="LiveForm_username" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Password:*</label>
                          <div class="controls">
                            <input name="LiveForm[password]" id="LiveForm_password" type="password">
                            </div>
                        </div>
                        <br/>
                        <h4>Bank information</h4>

                        <div class="control-group ">
                          <label class="control-label">Name of Bank:</label>
                          <div class="controls">
                            <input name="LiveForm[bankName]" id="LiveForm_bankName" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Bank City:</label>
                          <div class="controls">
                            <input name="LiveForm[bankBranchCity]" id="LiveForm_bankBranchCity" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Branch:</label>
                          <div class="controls">
                            <input name="LiveForm[bankBranchCode]" id="LiveForm_bankBranchCode" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Beneficiary Name:</label>
                          <div class="controls">
                            <input name="LiveForm[beneficiaryAccountName]" id="LiveForm_beneficiaryAccountName" type="text">
                        </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Beneficiary No:</label>
                          <div class="controls">
                            <input name="LiveForm[beneficiaryAccountNo]" id="LiveForm_beneficiaryAccountNo" type="text"></div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Swift Code:</label>
                          <div class="controls">
                            <input name="LiveForm[swiftCode]" id="LiveForm_swiftCode" type="text">                                                      
                        </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Routing No:</label>
                          <div class="controls">
                            <input name="LiveForm[routingNo]" id="LiveForm_routingNo" type="text">                                                      
                        </div>
                        </div>
                        <br/>
                        <h4>Accept terms and conditions</h4>
                        <input type="checkbox" id="terms" style="min-width:25px;min-height:auto">I understand that as an AMT Market customer, it is my responsibility to review all necessary information about currency trading and the AMT <a href="<?= $baseUrl ?>/terms" target="_blank">Terms and Conditions</a>. I am aware of the risks associated with foreign exchange trading and will seek advice and further my education on foreign exchange prior to starting any trading activity. <br>
                        <input type="checkbox" id="agreement" style="min-width:25px;min-height:auto">I understand that anyone opening a live trading account needs to adhere to the laws of their local country as such laws may differ from country to country. It is recommended that I check with local authorities to determine my country's regulations. 
                        <br/>
                        <div class="control-group">
                            <a href="#" class="button" id="live_submit" disabled="disabled"><span>Submit</span></a>
                        </div>
                </form>
            </div>
        </div>  
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){        
        $('#live_submit').click(function(){
            if($('input#terms').is(':checked') && $('input#agreement').is(':checked'))
            {
            $.ajax({
              type: "POST",
              url: 'http://member.amtmarket.com/site/newmember',
              crossDomain: true,
              dataType: 'jsonp',
              data: $('form').serialize(),
              success: function(data){
                if(data[0].hasError)
                {
                    $('#error').append(data[0].CMessage + '<br/>');
                    $.each(data[0].dataError, function(key,val)
                    {
                        $('#error').append('*' + key + '<br/>');
                    });
                }
                else
                {
                    var url = "<?php echo $baseUrl ?>";
                    $(location).attr('href',url + "/signupcomplete");
                }
              },
              error: function(e){
                // if(data[0].hasError)
                // {
                //     $('#error').append(data[0].CMessage + '<br/>');
                //     $.each(data[0].dataError, function(key,val)
                //     {
                //         $('#error').append('*' + key + '<br/>');
                //     });
                // }
                console.log(e);
                alert("Error in processing request.");
              }
            });
            }
            else
            {
                alert('Please check our terms and agreement.');
            }
        });
    });
</script>