
<!--Solar Modal -->

<div class="modal fade" role="dialog" tabindex="-1" id="solar_form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4> Step <span class="slidenum">1 of 7</span></h4>
                <button id="modal-close" type="button" class="btn modal-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <input type="hidden" name="monthly_electric_bill" id="monthly_electric_bill" value="$201-$300">
                    <input type="hidden" name="utility_provider" id="utility_provider" value="Other">
                    <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
                    <input type="hidden" id="property_type" name="property_type" value="Single Family">
                    <input type="hidden" id="roof_type" name="roof_type" value="Tile">
                    <input type="hidden" name="credit_rating" id="credit_rating" value="Good">
                    <input type="hidden" name="roof_shade" id="roof_shade" value="Not Sure">
                    <fieldset data-step="1" class="fadeInRight"><legend hidden="true">Electric Bill</legend>
                        <h3 class="form_box-question mb-1">What is your estimated monthly electric&nbsp;bill?</h3>
                        <p class="form_box-desc">This helps us determine how much solar power may save you.</p>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill01" type="radio" name="monthly_electric_bill_radio" value="$0-$50">
                                    <label for="bill01"><span>$0-$50</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill02" type="radio" name="monthly_electric_bill_radio" value="$51-$100">
                                    <label for="bill02"><span>$51-$100</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill03" type="radio" name="monthly_electric_bill_radio" value="$101-$150" checked="">
                                    <label for="bill03"><span>$101-$150</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill04" type="radio" name="monthly_electric_bill_radio" value="$151-$200">
                                    <label for="bill04"><span>$151-$200</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill05" type="radio" name="monthly_electric_bill_radio" value="$201-$300">
                                    <label for="bill05"><span>$201-$300</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill06" type="radio" name="monthly_electric_bill_radio" value="$300-$400">
                                    <label for="bill06"><span>$300-$400</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill07" type="radio" name="monthly_electric_bill_radio" value="$400+">
                                    <label for="bill07"><span>$400+</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset data-step="2" class="fadeInRight"><legend hidden="true">Electric Bill</legend>
                        <h3 class="form_box-question mb-1">How much shade does your roof get?</h3>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rs1" type="radio" name="roof_shade_radio" value="No Shade" required checked>
                                    <label for="rs1" id="no-shade-label"><span>No Shade</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rs2" type="radio" name="roof_shade_radio" value="Partial Shade" required>
                                    <label for="rs2" id="partial-shade-label"><span>Partial Shade</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rs3" type="radio" name="roof_shade_radio" value="Full Shade">
                                    <label for="rs3" id="full-shade-label"><span>Full Shade</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rs4" type="radio" name="roof_shade_radio" value="Not Sure">
                                    <label for="rs4" id="not-sure-label"><span>Not Sure</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button" id="form_submit_solar"><span class="btn-text">Get Your Quote</span></button><br>
                            </div>
                            <p class="tcpa form-tcpa text-center mt-3">
                                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                                    <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                                    to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                                    marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                                    telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                                    a condition of purchase. I also have read and agree to the <a href="https://{{$domainFullDomain}}/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://{{$domainFullDomain}}/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                                </label>
                            </p>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>


<!--Roofing Modal -->

<div class="modal fade" role="dialog" tabindex="-1" id="roofing_form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4> Step <span class="slidenum">1 of 7</span></h4>
                <button id="modal-close" type="button" class="btn modal-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <input type="hidden" id="roofing_type" name="roofing_type" value="Asphalt shingle">
                    <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
                    <input type="hidden" id="project_type" name="project_type" value="New roof for new home">
                    <fieldset data-step="1" class="fadeInRight"><legend hidden="true">Roofing Type</legend>
                        <h3 class="form_box-question mb-1">What type of roof are you looking for?</h3><br>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt1" type="radio" name="roofing_type_radio" value="Asphalt shingle">
                                    <label for="rt1"><span>Asphalt</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt2" type="radio" name="roofing_type_radio" value="Tile">
                                    <label for="rt2"><span>Tile</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt3" type="radio" name="roofing_type_radio" value="Natural slate" checked="">
                                    <label for="rt3"><span>Slate</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt4" type="radio" name="roofing_type_radio" value="Cedar shake">
                                    <label for="rt4"><span>Cedar</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt5" type="radio" name="roofing_type_radio" value="Metal">
                                    <label for="rt5"><span>Metal</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="rt6" type="radio" name="roofing_type_radio" value="Tar">
                                    <label for="rt6"><span>Tar</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset data-step="2" class="fadeInRight"><legend hidden="true">Time Frame</legend>
                        <h3 class="form_box-question mb-1">How soon do you want to begin this project?</h3><br>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tf1" type="radio" name="time_frame_radio" value="Immediately" required checked>
                                    <label for="tf1" id="no-shade-label"><span>Immediately</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tf2" type="radio" name="time_frame_radio" value="Within 1 month" required>
                                    <label for="tf2" id="partial-shade-label"><span>Within 1 month</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tf3" type="radio" name="time_frame_radio" value="1-3 months">
                                    <label for="tf3" id="full-shade-label"><span>1-3 months</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tf4" type="radio" name="time_frame_radio" value="3+ months">
                                    <label for="tf4" id="not-sure-label"><span>3+ months</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button" id="form_submit_roofing"><span class="btn-text">Get Your Quote</span></button><br>
                            </div>
                            <p class="tcpa form-tcpa text-center mt-3">
                                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                                    <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                                    to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                                    marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                                    telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                                    a condition of purchase. I also have read and agree to the <a href="https://{{$domainFullDomain}}/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://{{$domainFullDomain}}/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                                </label>
                            </p>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>

<!--Tubs Modal -->

<div class="modal fade" role="dialog" tabindex="-1" id="tubs_form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4> Step <span class="slidenum">1 of 7</span></h4>
                <button id="modal-close" type="button" class="btn modal-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form">
                    <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
                    <input type="hidden" id="project_reason" name="project_reason" value="Other">
                    <fieldset data-step="1" class="fadeInRight"><legend hidden="true">Roofing Type</legend>
                        <h3 class="form_box-question mb-1">Why Do You Want A Walk-In Tub?</h3><br>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="pr1" type="radio" name="project_reason_radio" value="Maintaining independence">
                                    <label for="pr1"><span>Maintaining independence</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="pr2" type="radio" name="project_reason_radio" value="Pain relief">
                                    <label for="pr2"><span>Pain relief</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="pr3" type="radio" name="project_reason_radio" value="Safety" checked>
                                    <label for="pr3"><span>Safety</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="pr4" type="radio" name="project_reason_radio" value="Other">
                                    <label for="pr4"><span>Other</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset data-step="2" class="fadeInRight"><legend hidden="true">Time Frame</legend>
                        <h3 class="form_box-question mb-1">When do you need a tub installed?</h3><br>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tft1" type="radio" name="time_frame_tubs_radio" value="Immediately" required checked>
                                    <label for="tft1" id="no-shade-label"><span>Immediately</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tft2" type="radio" name="time_frame_tubs_radio" value="Within 6 months" required>
                                    <label for="tft2" id="partial-shade-label"><span>Within 6 months</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="tft3" type="radio" name="time_frame_tubs_radio" value="Not Sure">
                                    <label for="tft3" id="full-shade-label"><span>Not Sure</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="button" id="form_submit_tubs"><span class="btn-text">Get Your Quote</span></button><br>
                            </div>
                            <p class="tcpa form-tcpa text-center mt-3">
                                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                                    <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                                    to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                                    marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                                    telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                                    a condition of purchase. I also have read and agree to the <a href="https://{{$domainFullDomain}}/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://{{$domainFullDomain}}/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                                </label>
                            </p>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>
