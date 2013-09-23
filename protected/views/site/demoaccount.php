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
                <h2 class="separate">Open a demo account</h2>
                    <h4>Try our popular MetaTrader 4 account. Register a practice account by filling up the form below.</h4>
                    <form>
                        <span id="error" style="color:red"></span>
                        <div class="control-group ">
                            <label class="control-label">First Name:*</label>
                            <div class="controls">
                              <input name="DemoForm[firstName]" id="DemoForm_firstName" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Last Name:*</label>
                          <div class="controls">
                            <input name="DemoForm[lastName]" id="DemoForm_lastName" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Id/Passport No.:*</label>
                          <div class="controls">
                            <input name="DemoForm[id]" id="DemoForm_id" type="text">
                            </div>
                        </div>
                        <div class="control-group">
                         <label class="control-label">Gender:*</label>
                           <div class="controls">
                             <select name="MemberForm[gender]" id="MemberForm_gender">
                                <option value="">Select a gender</option>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                                </select>                          
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Email:*</label>
                          <div class="controls">
                            <input name="DemoForm[email]" id="DemoForm_email" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Contact:</label>
                          <div class="controls">
                            <input name="DemoForm[tel]" id="DemoForm_tel" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Username:*</label>
                          <div class="controls">
                            <input name="DemoForm[username]" id="DemoForm_username" type="text">
                            </div>
                        </div>
                        <div class="control-group ">
                          <label class="control-label">Password:*</label>
                          <div class="controls">
                            <input name="DemoForm[password]" id="DemoForm_password" type="password">
                            </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Country:*</label>
                            <div class="controls">
                              <select name="DemoForm[country]" id="DemoForm_country">
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
                        <div class="control-group">
                            <a href="#" class="button" id="demo_submit"><span>Submit</span></a>
                        </div>
                </form>
            </div>
        </div>  
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#demo_submit').click(function(){
            $.ajax({
              type: "POST",
              url: 'http://member.amtmarket.com/site/newmember',
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
                    $(location).attr('href',url + "/registrationcomplete");
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
        });
    });
</script>