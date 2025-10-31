<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<div id="calculator-form-container" class="calculator-form-wrapper">
    <div id="fbuilder">
        <div id="fbuilder_1" data-processed="1">
            <div id="formheader_1">
                <div class="fform" id="field">
                    <h2 class="cff-form-title"><?php echo esc_html($atts['title']); ?></h2>
                    <span class="cff-form-description"><?php echo esc_html($atts['description']); ?></span>
                </div>
            </div>
            
            <div id="fieldlist_1" class="top_aligned">
                <div class="pb0 pbreak" page="0">
                    
                    <!-- Age Section -->
                    <div class="fields fieldname10_1 cff-html-field" id="field_1-0">
                        <div id="fieldname10_1" class="dfield">
                            <h4>Age</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname4_1 cff-dropdown-field" id="field_1-1">
                        <label for="fieldname4_1">Which age band do you fit into?<span class="r">*</span></label>
                        <div class="dfield">
                            <select id="fieldname4_1" name="fieldname4_1" class="field large required" data-points-field="age">
                                <option value="">Please select...</option>
                                <option value="25">at least 18 but less than 25 years</option>
                                <option value="30">at least 25 but less than 33 years</option>
                                <option value="25">at least 33 but less than 40 years</option>
                                <option value="15">at least 40 but less than 45 years</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- English Language Section -->
                    <div class="fields fieldname8_1 cff-html-field" id="field_1-2">
                        <div id="fieldname8_1" class="dfield">
                            <h4>English language requirements</h4>
                            <p>Read the English language skills requirements.</p>
                        </div>
                    </div>
                    
                    <div class="fields fieldname9_1 cff-dropdown-field" id="field_1-3">
                        <label for="fieldname9_1">How would you rate your English language ability?*</label>
                        <div class="dfield">
                            <select id="fieldname9_1" name="fieldname9_1" class="field large" data-points-field="english">
                                <option value="">Please select...</option>
                                <option value="0">Competent English</option>
                                <option value="10">Proficient English</option>
                                <option value="20">Superior English</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Skilled Employment Section -->
                    <div class="fields fieldname17_1 cff-html-field" id="field_1-4">
                        <div id="fieldname17_1" class="dfield">
                            <h4>Skilled employment experience</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname39_1 cff-dropdown-field" id="field_1-5">
                        <label for="fieldname39_1">Overseas skilled employment – (outside Australia):<span class="r">*</span></label>
                        <div class="dfield">
                            <select id="fieldname39_1" name="fieldname39_1" class="field large required" data-points-field="overseas_work">
                                <option value="">Please select...</option>
                                <option value="0">Less than 3 years</option>
                                <option value="5">At least 3 but less than 5 years</option>
                                <option value="10">At least 5 but less than 8 years</option>
                                <option value="15">At least 8 years</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="fields fieldname40_1 cff-dropdown-field" id="field_1-6">
                        <label for="fieldname40_1">Australian skilled employment – (in Australia):<span class="r">*</span></label>
                        <div class="dfield">
                            <select id="fieldname40_1" name="fieldname40_1" class="field large required" data-points-field="australian_work">
                                <option value="">Please select...</option>
                                <option value="0">Less than 1 year</option>
                                <option value="5">At least 1 but less than 3 years</option>
                                <option value="10">At least 3 but less than 5 years</option>
                                <option value="15">At least 5 but less than 8 years</option>
                                <option value="20">At least 8 years</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Educational Qualifications -->
                    <div class="fields fieldname41_1 cff-html-field" id="field_1-7">
                        <div id="fieldname41_1" class="dfield">
                            <h4>Educational qualifications</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname42_1 cff-dropdown-field" id="field_1-8">
                        <label for="fieldname42_1">What is your highest educational qualification?<span class="r">*</span></label>
                        <div class="dfield">
                            <select id="fieldname42_1" name="fieldname42_1" class="field large required" data-points-field="qualifications">
                                <option value="">Please select...</option>
                                <option value="20">A Doctorate from an Australian educational institution or a Doctorate from another educational institution, that is of a recognised standard.</option>
                                <option value="15">At least a Bachelor degree from an Australian educational institution or at least a Bachelor qualification, from another educational institution, that is of a recognised standard.</option>
                                <option value="10">A diploma or trade qualification from an Australian educational institution.</option>
                                <option value="10">Attained a qualification or award recognised by the relevant assessing authority for your nominated skilled occupation as being suitable for that occupation</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Australian Study Requirement -->
                    <div class="fields fieldname43_1 cff-html-field" id="field_1-9">
                        <div id="fieldname43_1" class="dfield">
                            <h4>Australian study requirement</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname44_1 cff-radiobutton-field" id="field_1-10">
                        <label>Do you have at least 1 degree, diploma or trade qualification from an Australian educational institution that meets the Australian study requirement?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname44_1_rb0">
                                    <input name="fieldname44_1" id="fieldname44_1_rb0" class="field group required" value="5" type="radio" data-points-field="australian_study">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname44_1_rb1">
                                    <input name="fieldname44_1" id="fieldname44_1_rb1" class="field group required" value="0" type="radio" data-points-field="australian_study">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Specialist Education -->
                    <div class="fields fieldname45_1 cff-html-field" id="field_1-11">
                        <div id="fieldname45_1" class="dfield">
                            <h4>Specialist education qualification</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname46_1 cff-radiobutton-field" id="field_1-12">
                        <label>Do you have a Masters degree by research or a Doctorate degree from an Australian educational institution that included at least 2 academic years to in a relevant field?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname46_1_rb0">
                                    <input name="fieldname46_1" id="fieldname46_1_rb0" class="field group required" value="10" type="radio" data-points-field="specialist_education">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname46_1_rb1">
                                    <input name="fieldname46_1" id="fieldname46_1_rb1" class="field group required" value="0" type="radio" data-points-field="specialist_education">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Community Language -->
                    <div class="fields fieldname47_1 cff-html-field" id="field_1-13">
                        <div id="fieldname47_1" class="dfield">
                            <h4>Credentialled community language</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname51_1 cff-radiobutton-field" id="field_1-14">
                        <label>Have you been accredited at the paraprofessional level or above, certified at the certified provisional level or above, or have a community language credential for interpreting or translating by the National Accreditation Authority for Translators and Interpreters?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname51_1_rb0">
                                    <input name="fieldname51_1" id="fieldname51_1_rb0" class="field group required" value="5" type="radio" data-points-field="community_language">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname51_1_rb1">
                                    <input name="fieldname51_1" id="fieldname51_1_rb1" class="field group required" value="0" type="radio" data-points-field="community_language">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Regional Study -->
                    <div class="fields fieldname48_1 cff-html-field" id="field_1-15">
                        <div id="fieldname48_1" class="dfield">
                            <h4>Study in regional Australia</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname54_1 cff-radiobutton-field" id="field_1-16">
                        <label>Do you have at least 1 degree, diploma or trade qualification from an Australian educational institution that satisfies the Australian study requirement obtained while living and studying in an eligible area of regional Australia?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname54_1_rb0">
                                    <input name="fieldname54_1" id="fieldname54_1_rb0" class="field group required" value="5" type="radio" data-points-field="regional_study">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname54_1_rb1">
                                    <input name="fieldname54_1" id="fieldname54_1_rb1" class="field group required" value="0" type="radio" data-points-field="regional_study">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Partner Skills -->
                    <div class="fields fieldname49_1 cff-html-field" id="field_1-17">
                        <div id="fieldname49_1" class="dfield">
                            <h4>Partner skills</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname52_1 cff-dropdown-field" id="field_1-18">
                        <label for="fieldname52_1">Select the relevant partner skills qualifications<span class="r">*</span></label>
                        <div class="dfield">
                            <select id="fieldname52_1" name="fieldname52_1" class="field large required" data-points-field="partner_skills">
                                <option value="">Please select...</option>
                                <option value="10">Your spouse or de facto partner must also be an applicant for this visa and meet age, English and skill criteria</option>
                                <option value="5">Your spouse or de facto partner must also be an applicant for this visa and has competent English</option>
                                <option value="10">You are single or your partner is an Australian citizen or permanent resident</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Professional Year -->
                    <div class="fields fieldname50_1 cff-html-field" id="field_1-19">
                        <div id="fieldname50_1" class="dfield">
                            <h4>Professional year in Australia</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname53_1 cff-radiobutton-field" id="field_1-20">
                        <label>Did you complete a professional year in Australia?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname53_1_rb0">
                                    <input name="fieldname53_1" id="fieldname53_1_rb0" class="field group required" value="5" type="radio" data-points-field="professional_year">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname53_1_rb1">
                                    <input name="fieldname53_1" id="fieldname53_1_rb1" class="field group required" value="0" type="radio" data-points-field="professional_year">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Nomination -->
                    <div class="fields fieldname57_1 cff-html-field" id="field_1-21">
                        <div id="fieldname57_1" class="dfield">
                            <h4>Nomination</h4>
                        </div>
                    </div>
                    
                    <div class="fields fieldname58_1 cff-radiobutton-field" id="field_1-22">
                        <label>Have you been invited to apply for a Skilled Nominated visa (subclass 190) and the nominating State or Territory government agency has not withdrawn the nomination?<span class="r">*</span></label>
                        <div class="dfield">
                            <div class="one_column">
                                <label for="fieldname58_1_rb0">
                                    <input name="fieldname58_1" id="fieldname58_1_rb0" class="field group required" value="5" type="radio" data-points-field="nomination">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="one_column">
                                <label for="fieldname58_1_rb1">
                                    <input name="fieldname58_1" id="fieldname58_1_rb1" class="field group required" value="0" type="radio" data-points-field="nomination">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Points Summary -->
                    <div class="fields calculated-wrapper fieldname14_1 cff-div-field cff-container-field" id="field_1-23">
                        <div id="fieldname14_1">
                            <div class="fields fieldname15_1 cff-html-field" id="field_1-27">
                                <div id="fieldname15_1" class="dfield">
                                    <h4>Your total points summary</h4>
                                </div>
                            </div>
                            
                            <div class="points-summary">
                                <div class="points-row">
                                    <label>Age:</label>
                                    <input type="text" id="age_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>English language:</label>
                                    <input type="text" id="english_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Work experience outside Australia:</label>
                                    <input type="text" id="overseas_work_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Work experience in Australia:</label>
                                    <input type="text" id="australian_work_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Qualifications:</label>
                                    <input type="text" id="qualifications_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Australian study requirement:</label>
                                    <input type="text" id="australian_study_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Specialist education requirement:</label>
                                    <input type="text" id="specialist_education_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Accreditation in a community language:</label>
                                    <input type="text" id="community_language_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Study in regional Australia:</label>
                                    <input type="text" id="regional_study_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Partner skills:</label>
                                    <input type="text" id="partner_skills_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Professional year in Australia:</label>
                                    <input type="text" id="professional_year_points" readonly value="0">
                                </div>
                                <div class="points-row">
                                    <label>Nomination by a state or territory government:</label>
                                    <input type="text" id="nomination_points" readonly value="0">
                                </div>
                                <div class="points-row total-points">
                                    <label><strong>Your points total:</strong></label>
                                    <input type="text" id="total_points" readonly value="0" class="total-points-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Reset Button -->
                    <div class="fields fieldname11_1 cff-button-field" id="field_1-24">
                        <input id="reset_calculator" type="button" value="Reset Calculator" class="field reset-button">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>