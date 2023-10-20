<script>
window.submittingToLeadProsper = false;
$('form').submit(function (e) {
    var form = this;
    e.preventDefault();

    if (!$(form).validate().form())
        return;
    // $('#form_submit').prop('disabled', true);

    if($("#email").val() === "pingdom@test.com"){
        // prepare form for lead post
        var formdata = $(form).serializeArray().reduce(function (m, o) {
                m[o.name] = o.value;
                return m;
            }, {});

                    const searchParams = new URLSearchParams(window.location.search);
                    searchParams.forEach((value, key) => {
            if (formdata[key] === undefined)
                formdata[key] = value;
        });

                    formdata = Object.keys(formdata).reduce((acc, k) => (!formdata[k] && k != 'test' && delete acc[k], acc), formdata);

                    // prepare form for lead post

                    formdata['email_address'] = $('#email').val();
                    formdata['lead'] = "true";
                    formdata['vertical'] = "roofing";
                    formdata['token'] = token;
                    formdata['currentStep'] = current_step;
                    formdata['totalSteps'] = totalStep;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['roof_type'] = $('#roofing_type').val();
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'roofing-f1';

                    window.formdata = formdata;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $submitUrl?>',
                        data: formdata,
                        //async: false,
                        dataType: "text",
                        success: function (data) {
            var result = JSON.parse(data);
            if(result.complete){
                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=roofing");
                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
            }
        }, error: function(data) {
            // console.log(data);
            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
        }
                    });
                    stl(formdata);
                }else{
        var formData = fillFormDataRoofing();
        window.formdata = formData;

        if(window.submittingToLeadProsper === false){
            window.submittingToLeadProsper = true;
            $.ajax({
                            type: 'POST',
                            url: '<?php echo $leadProsperUrl?>',
                            data: formData,
                            // async: false,
                            dataType: "text",
                            success: function (data) {
                var result = JSON.parse(data);
                if(result.status !== 'ACCEPTED') {
                    Rollbar.error('LeadProsper - Lead submission FAILED for' + ' email : [ ' + $('#email').val() +' ]' + ' REASON: ' + result.message);
                }
                setTimeout(function() {
                    window.location.replace("/thank-you?ef_aff_id="+getUrlParameter('ef_aff_id')+"&ef_tx_id="+getUrlParameter('ef_tx_id')+"&s1="+getUrlParameter('s1')+"&s2="+getUrlParameter('s2')+"&s3="+getUrlParameter('s3')+"&s4="+getUrlParameter('s4')+"&s5="+getUrlParameter('s5')+"&v=roofing"+"&ef_offer_id="+getUrlParameter('ef_offer_id'));
                }, 500);
                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

            }, error: function(data) {
                // console.log(data);
                alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                $('#form_submit').removeAttr('disabled');
            }, complete: function() {
                window.submittingToLeadProsper = false; // Unlock the submit when finished
            }
                        });
                        stl(formData);
                    } else {
            console.log('Already submitting to LeadProsper, please wait...');
        }
    }
});

function stl(formdata){
    $.ajax({
                    type: 'POST',
                    url: '<?php echo $leadBackupUrl."/stl.php"?>',
                    data: formdata,
                    async: true,
                    dataType: "text",
                    success: function (data) {
        // var result = JSON.parse(data);
    }, error: function(data) {
        // console.log(data);
    }
                });
}

</script>
