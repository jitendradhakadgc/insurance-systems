<?php
/*
Template Name: Custom PDF Template
*/
$image_url = "http://assistant.local/wp-content/uploads/2024/08/ac.jpg"; // Define your image URL here
$post = get_post( 84 );
$name = '';
if(!empty($post)){
    $name = $post->post_title;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download PDF with Image</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="content">
        <div class="header">
        <p style="text-align:center">January 15, 2023</p>
        <p style="text-align:center; text-decoration: underline" class="title">OFFER OF COMPROMISE PURSUANT TO FLA. STAT. § 90.408</p>
    </div>

    <div class="contact-info">
        <p style="line-height: 1px;
    font-size: 12px;"><strong>VIA EMAIL:</strong> <span class="email">nicolas@gmail.com</span></p>
        <p style="line-height: 1px;
    font-size: 12px;">Denisse Galvan, Esquire</p>
        <p style="line-height: 1px;
    font-size: 12px;">American Automobile Insurance Company</p>
        <p style="line-height: 1px;
    font-size: 12px;">PO Box 970</p>
        <p style="line-height: 1px;
    font-size: 12px;">O'Fallon, MO 63366</p>
    </div>

    <div class="claim-info">
        <p style="line-height: 1px;
    font-size: 12px;"><strong>Re:</strong></p>
        <p style="line-height: 1px;
        font-size: 12px;">Our Client: Nicolas Breus</p>
        <p style="line-height: 1px;
    font-size: 12px;">Your Insured: Total Package Logistics, LLC</p>
        <p style="line-height: 1px;
    font-size: 12px;">Your Insured Driver: Luis Robetto Vives</p>
        <p style="line-height: 1px;
    font-size: 12px;">Claim No: AGVV01971824</p>
        <p style="line-height: 1px;
    font-size: 12px;">Date Of Loss: February 12, 2024</p>
    </div>

    <div class="content">
        <p>Dear Mr. <?php echo $name;?>,</p>

        <p>As you know, this firm represents Client (“Mr. Name” or “our client”) for the injuries he sustained on
            February 26, 2020, when he was involved in a collision with Client (“Ms. Name” or “your client”). This
            demand is a good-faith attempt to resolve our client’s claim in order to save valuable time and avoid the
            unnecessary time and expense of litigation on this clear liability claim. Of course, this demand is a
            privileged settlement communication and is not intended for use in future litigation without our consent. No
            information contained herein should be considered a factual or legal admission by our client.</p>

        <p>We expect that you will provide us with a list of any additional items you need in order to properly and
            fully evaluate this demand within <strong>10 business days of the date of this letter</strong>. We will make
            a good-faith effort to respond to any requests you make for additional information regarding this demand.
            <strong>We also ask that this demand be immediately forwarded to all insurance company decision-makers and,
                of course, your client.</strong>
        </p>
    </div>

    <div class="facts-liability">
        <h2>1. FACTS & LIABILITY</h2>
        <p class="note">[Note: the following facts and liability narratives have been condensed for illustration
            purposes only.]</p>
        <p>Wednesday, February 26, 2020, began like any other day in the Household. Mr. Name was up early that morning
            preparing breakfast for himself and his son, Junior. Mr. Name and his little boy were especially happy on
            this particular morning, in part because it was an early release day from school. Mr. Name dropped off his
            son at school and returned home. By 8:30 A.M., Mr. Name, who was an active runner training for the upcoming
            March 2020 Gate River Run 5K, was headed for a four-mile run before returning to his son’s school for early
            dismissal.</p>

        <p>Mr. Name entered the last quarter mile of his run westbound on the sidewalk alongside U.S. 90/Beach Boulevard
            approaching the intersection of Palm Island Road in Jacksonville, Duval County, Florida. As Mr. Name
            lawfully traversed through the pedestrian crosswalk, suddenly and without warning, he was struck by the
            front bumper of a vehicle operated by Ms. Name, who was traveling northbound on Palm Island Road. Ms. Name’s
            vehicle struck the right side of Mr. Name’s body, causing him to spin around before forcefully falling onto
            the ground. Mr. Name was shocked and slightly dazed as he lay on the hot asphalt. As his adrenaline wore
            off, Mr. Name felt extreme pain and discomfort throughout his neck, back, and abdomen. After striking Mr.
            Name, Ms. Name emerged from her vehicle and haphazardly stumbled over to Mr. Name. Mr. Name pleaded to Ms.
            Name that she call 9-1-1.</p>

        <div class="image-container">
            <img src="<?php echo $image_url;?>" alt="Accident Diagram">
        </div>

        <p>As exposed in the Florida Traffic Crash Report,<sup>1</sup> Deputy Name of the Jacksonville Sheriff’s Office
            investigated the collision and determined that Ms. Name was the sole party responsible for the collision due
            to her driving while intoxicated and failure to yield the right-of-way in violation of Florida law.</p>
    </div>
    <div class="new-content">
        <p><strong class="conditions">The conditions for establishing liability, in this case, are clear.</strong> Ms.
            [Name] owed a non-delegable duty to exercise reasonable care to pedestrians, Mr. [Name] in particular, while
            operating a motor vehicle. Pursuant to <strong>Fla. Stat. § 316.193(1)</strong>, “[a] person is guilty of
            the offense of driving under the influence … if the person is driving or in actual physical control of a
            vehicle within this state and … [t]he person is under the influence of alcoholic beverages … to the extent
            that the person’s normal faculties are impaired [and] [t]he person has a blood-alcohol level of 0.08 or
            more….” (emphasis added).</p>

        <p>On the date of the collision, Ms. [Name] was negligent in that she operated her vehicle while intoxicated,
            failed to operate her vehicle in a reasonably safe and non-negligent manner on a public roadway, operated
            her vehicle in a careless and reckless manner in complete disregard for the safety of pedestrians, failed to
            maintain a safe and controllable operating speed, failed to execute driving maneuvers safely and with due
            caution for pedestrians, failed to apply her brakes in a timely manner, failed to keep a proper lookout, and
            failed to yield the right-of-way, all of which culminated in an injurious collision with Mr. [Name].</p>

        <p><strong>As evidenced by the photographs below, this was a collision that occurred within a clearly marked and
                unobscured pedestrian crosswalk that resulted in severe personal injuries and other
                damages.</strong><sup>2</sup></p>

        <div class="photos">
            <img src="<?php echo $image_url;?>" alt="Photo 1">
            <img src="<?php echo $image_url;?>" alt="Photo 2">
        </div>
    </div>
    <div>
        <h2>2.INJURIES & TREATMENTS</h2>
        <h4>2.1. Summary of Injuries</h4>
        <p>
            We have enclosed all pertinent medical information regarding Mr. [Name]’s injuries. These injuries were
            suffered as a direct and proximate result of the February 26, 2020, collision. The chart below represents a
            non-exhaustive summary of the injuries sustained by our client:
        </p>
        <p class="highlight">[Note: the following ICD codes have been condensed for illustration purposes only.]</p>
        <table class="treatementtable">
            <caption>Summary of Injuries</caption>
            <thead>
                <tr>
                    <th>Injury/Diagnosis</th>
                    <th>ICD Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pain in Right Ankle and Joints of Right Foot</td>
                    <td>M25.571</td>
                </tr>
                <tr>
                    <td>Spondylosis without Myelopathy or Radiculopathy, Cervical Region</td>
                    <td>M47.812</td>
                </tr>
                <tr>
                    <td>Postlaminectomy Syndrome, Not Elsewhere Classified</td>
                    <td>M96.1</td>
                </tr>
                <tr>
                    <td>Segmental and Somatic Dysfunction of Cervical Region</td>
                    <td>M99.01</td>
                </tr>
                <tr>
                    <td>Segmental and Somatic Dysfunction of Lumbar Region</td>
                    <td>M99.03</td>
                </tr>
                <tr>
                    <td>Concussion without Loss of Consciousness</td>
                    <td>S06.0X0A</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h4>2.2. Treatment</h4>
        <p class="highlight">[Note: the medical summations below have been condensed and/or providers have been removed
            for illustration purposes only and do not constitute the entirety of the client’s treatment timeline for
            this claim.]</p>
        <table class="medicalSummation">
            <thead>
                <tr>
                    <th colspan="2">Redacted Name Medical Center</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Treatment Timeline</td>
                    <td>February 26, 2020</td>
                </tr>
                <tr>
                    <td>Number of Visits</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Summary</td>
                    <td>
                        <ul>
                            <li>
                                On February 26, 2020, Mr. [Name] presented to the emergency room for emergent treatment
                                and care. Upon arrival, Mr. [Name] complained of lower back pain, right arm and right
                                leg pain, and posterior head pain. After a physical examination and reviewing the
                                results of Mr. [Name]’s diagnostic imaging, the attending emergency physician diagnosed
                                Mr. [Name] with a back strain/sprain and a head injury. The attending emergency
                                physician discharged Mr. [Name] with prescriptions for Flexeril and Ibuprofen and
                                instructions to consult with his primary care physician if his symptoms persisted or
                                worsened.
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Supporting Documents</td>
                    <td>
                        <ul>
                            <li>
                                Exhibit 5 - Redacted Name Medical Center (Medical Records)
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="medicalSummation">
            <thead>
                <tr>
                    <th colspan="2">Redacted Name Orthopedics
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Treatment Timeline</td>
                    <td>February 27, 2020 - May 26, 2021</td>
                </tr>
                <tr>
                    <td>Number of Visits</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>Summary</td>
                    <td>
                        <ul>
                            <li>
                                On February 27, 2020, Mr. XXXX presented to XXXX,
                                D.C., for a chiropractic evaluation and treatment. During the
                                initial consultation, Mr. XXXX complained of radicular
                                cervical and lumbar spine pain, right hip, knee, and
                                foot/ankle pain, pain throughout his sternum, and frequent
                                headaches that inhibited his ability to sleep and prevented
                                him from participating in his normal activities of daily
                                living. After a physical examination, Dr. XXXX
                                recommended a treatment plan that consisted of but was not
                                limited to, the following: chiropractic manipulation, soft
                                tissue therapy, and manual therapy. The goals of Mr.
                                XXXX’s treatment plan were to decrease his pain and
                                associated limitations throughout all affected areas and
                                increase his functionality in the performance of his normal
                                activities of daily living. </li>
                            <li>On June 16, 2020, Mr. XXXX returned to Dr. XXXX for an
                                orthopedic progress examination. Upon arrival, Mr. XXXX
                                stated that he remained symptomatic for cervical and lumbar
                                spine pain that radiated into his upper extremities and left
                                lower extremities, and that he required the use of a cane for
                                ambulation. After a clinical examination and review of Mr.
                                XXXX’s diagnostic imaging, Dr. XXXX confirmed that Mr.
                                XXXX suffered a failed cervical spine fusion (nonunion)
                                and recommended that he undergo an L5-S1 Fusion with
                                Hardware Removal (Revision) and a Diagnostic Cervical
                                Spine Epidural at C5-C6. Dr. XXXX opined that Mr.
                                XXXX’s mechanical complications of his cervical
                                orthopedic implants/grafts were, to a reasonable degree
                                of medical certainty, directly related to his February 26,
                                2020, motor vehicle collision.</li>
                            <li>On May 24, 2021, and May 26, 2021, Mr. XXXX returned to
                                Mr. XXXX for a physical therapy progress examination.
                                Over the course of approximately 60 visits, Mr. XXXX
                                underwent skilled physical therapy treatment and care,
                                including multiple courses of postoperative physical therapy,
                                to which he responded favorably. After a physical
                                examination, Mr. XXXX noted that Mr. XXXX had yet to
                                reach maximum medical improvement and discharged him
                                with a recommendation that he continue with his prescribed
                                course of physical therapy to address his cervical and lumbar
                                spine deficits.
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Supporting Documents</td>
                    <td>
                        <ul>
                            <li>
                                Exhibit 6 - Redacted Name Orthopedics (Medical Records)
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="medicalSummation">
            <thead>
                <tr>
                    <th colspan="2">Redacted Name Imaging
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Treatment Timeline</td>
                    <td>March 12, 2020 - April 8, 2020</td>
                </tr>
                <tr>
                    <td>Number of Visits</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Summary</td>
                    <td>
                        <ul>
                            <li>
                                On March 12, 2020, Mr. XXXX presented to XXXX, M.D.,
                                at which time he underwent diagnostic imaging which
                                revealed, in relevant part, the following:
                                <ul>
                                    <li>CT of Cervical Spine:
                                        ■ Prior Anterior Cervical Discectomy with
                                        Fusion at C6-C7 with suspected nonunion and
                                        questionable early loosening of the C6 and
                                        C7 cervical screws.</li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Supporting Documents</td>
                    <td>
                        <ul>
                            <li>
                                Exhibit 8 - Redacted Name Imaging (Medical Records)
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="medicalSummation">
            <thead>
                <tr>
                    <th colspan="2">Redacted Name Surgery Center

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Treatment Timeline</td>
                    <td>April 17, 2020 - September 15, 2020</td>
                </tr>
                <tr>
                    <td>Number of Visits</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Summary</td>
                    <td>
                        <ul>
                            <li>
                                On September 15, 2020, Mr. XXXX returned to Dr.
                                XXXX, at which time he underwent a Revision C5-C6
                                Anterior Cervical Discectomy and Fusion. Mr. XXXX
                                tolerated the procedure well and was discharged with
                                prescriptions for Oxycontin and Gabapentin and instructions
                                to return for a
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Supporting Documents</td>
                    <td>
                        <ul>
                            <li>
                                Exhibit 10 - Redacted Name Surgery Center (Medical Records)
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div>
        <h2>3.DAMAGES</h2>
        <h4>3.1. Total Projected Claim Value</h4>
        <table class="projectclaim">
            <thead>
                <tr>
                    <th colspan="2">Elements of Damages
                    </th>
                </tr>
                <tr>
                    <th colspan="2" class="economicdamage">Economic Damages

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Past Medical Expenses $203,520.39
                    </td>
                    <td>$203,520.39</td>
                </tr>
                <tr>
                    <td>Future Medical Expenses</td>
                    <td>$85,740.00</td>
                </tr>
                <tr>
                    <td>Loss of Income</td>
                    <td>
                        $267,030.93
                    </td>
                </tr>
                <tr>
                    <td>Loss of Household Services</td>
                    <td>
                        $18,099.34

                    </td>
                </tr>
            </tbody>
        </table>

        <table class="projectclaim">
            <thead>
                <tr>
                    <th colspan="2" class="economicdamage">Non-Economic Damages
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Past and Future Pain and Suffering
                    </td>
                    <td>$1,000,000.00</td>
                </tr>
                <tr>
                    <td>Punitive Damages</td>
                    <td>$1,000,000.00</td>
                </tr>

            </tbody>
        </table>

        <div class="totaldamage">
            <p>
                Total Damages
            </p>
            <p>$1,000,000.00</p>
        </div>
        <div>
            <h4>
                3.2. Past Medical Expenses

            </h4>

            <table class="medicalexpense">
                <thead>
                    <tr>
                        <th>Provider
                        </th>


                        <th>Date of Service
                        </th>


                        <th>Amount
                            Charged
                        </th>

                        <th>Supporting
                            Document(s)
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Redacted Name Medical Center
                        </td>


                        <td>2/26/2020</td>


                        <td>$37,010.90</td>



                        <td>Exhibit 12</td>

                    </tr>
                </tbody>

            </table>
            <p class="note">[Note: interim provider totals and exhibits have been removed for illustration purposes
                only.]</p>


            <table class="medicalexpense">
                <tbody>
                    <tr>
                        <td>Redacted Name Physicians
                        </td>


                        <td>6/29/2020 -
                            9/15/2020</td>


                        <td>$16,912.00</td>



                        <td>Exhibit 18</td>

                    </tr>
                </tbody>

            </table>

            <div class="totaldamage">
                <p>
                    Total
                </p>
                <p>$203,520.39</p>
            </div>
            <p>
                If you claim any of the medical treatment above was unnecessary, or that any of the bills
                associated with such treatment were unreasonable, then please identify in writing which bills you
                dispute and the factual basis for such dispute. If you dispute them with a qualified expert opinion
                from a doctor willing to testify, then please provide us with a copy of his/her report. If not, please
                confirm in writing that you dispute the bills as an adjuster or an attorney and not a qualified
                medical professional. If you do not respond in writing to this report of past medical expenses, we
                will assume you do not dispute the amount of medical bills set forth above.
            </p>
        </div>

        <div>
            <h4>
                3.3. Future Medical Expenses
            </h4>
            <p>Mr. XXXX continues to experience pain and symptomatology as a result of the injuries he
                sustained in the collision at issue and will require additional treatment moving forward,
                including, but not limited to, physical therapy, orthopedic treatment and care, pain management,
                diagnostic imaging, and multi-level spine epidural steroid injections. Thus, a conservative
                estimate of future medical care for Mr. XXXX is $85,740.00.</p>

            <table class="medicalexpense">
                <thead>
                    <tr>
                        <th>Procedure
                        </th>


                        <th>Years
                        </th>


                        <th>No./Year
                        </th>

                        <th>Cost
                        </th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Physical
                            Therapy
                        </td>


                        <td>3</td>


                        <td>12</td>



                        <td>$250.00 </td>
                        <td>$9,000.00</td>
                    </tr>
                </tbody>

            </table>
            <p class="note">[Note: interim provider totals and exhibits have been removed for illustration purposes
                only.]</p>


            <table class="medicalexpense">
                <tbody>
                    <tr>
                        <td>Multi-Level
                            Spine Epidural
                            Steroid
                            Injections
                        </td>


                        <td>3</td>


                        <td>3</td>



                        <td>$4,000.00</td>
                        <td>$36,000.00</td>

                    </tr>
                </tbody>

            </table>

            <div class="totaldamage">
                <p>
                    Total
                </p>
                <p>$203,520.39</p>
            </div>
            <em>Note that the costs of healthcare and medication will continue to rise significantly, and we
                reserve the right to revise our projection of future medicals on this basis, among others. We also
                note that this estimate is only for three years and could readily be augmented for additional
                years of medical treatments</em>
        </div>
        <div>
            <h4>3.4. Loss of Income</h4>
            <p>Based on Mr. XXXX’s income information for tax years 2019 and 2020, as well as the attached
                Economic Loss Report estimating that he will be unable to return to work until at least May
                2024,3 Mr. XXXX suffered a loss of income totaling $267,030.93 when he was rendered unable
                to work due to the injuries he sustained in the February 26, 2020, collision. These losses are
                broken down as follows:</p>

            <p>Loss of Income Schedule</p>
            <table class="medicalexpense">
                <thead>
                    <tr>
                        <th>Start of
                            Loss Date
                        </th>


                        <th>End of Loss Date
                        </th>


                        <th>Lost Income
                        </th>

                        <th>Net Loss
                        </th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>2/26/2020
                        </td>


                        <td>12/31/2020</td>


                        <td>$49,125.68</td>



                        <td>$49,125.68
                        </td>

                    </tr>
                </tbody>

            </table>
            <p class="note">[Note: interim provider totals and exhibits have been removed for illustration purposes
                only.]</p>


            <table class="medicalexpense">
                <tbody>
                    <tr>
                        <td>1/1/2024
                        </td>


                        <td>5/25/2024</td>


                        <td>$27,696.60</td>



                        <td>$27,696.60</td>


                    </tr>
                </tbody>

            </table>

            <div class="totaldamage">
                <p>
                    Total Loss of Earnings
                </p>
                <p>$267,030.93</p>
                <p>$267,030.93</p>
            </div>
        </div>
        <div>
            <h4>3.5. Loss of Household Services</h4>
            <p>As a result of the collision, we estimate that Mr. XXXX has been unable to contribute
                $18,099.34 in labor in the form of past and future household services. Our calculation rests on
                three variables:</p>
            <ol>
                <li>
                    Before his collision, we assume that Mr. XXXX contributed an average of 2.08 hours of
                    household chores per day to the household, in line with the average contribution of
                    persons of similar age and gender in America
                </li>
                <li>We assume that the monetary value of Mr. XXXX’s labor is consistent with the average
                    housekeeping salary of $11.92 an hour in the State of Florida, as estimated from the May
                    2020 report on Occupational Employment and Wages by the U.S. Bureau of Labor
                    Statistics</li>
                <li>In our estimation, Mr. XXXX suffered a 100% impairment from contributing to
                    household chores from February 26, 2020, through May 26, 2021, and a conservative
                    25% impairment for three years thereafter.</li>
            </ol>
            <p>Assuming no further impairment of household chores after May 26, 2024, solely for simplicity
                and convenience of early settlement, we calculate the value of loss of household services
                between February 26, 2020, and May 26, 2024, at $18,099.34.</p>

            <table class="medicalexpense">
                <thead>
                    <tr>
                        <th colspan="6" class="loss">Loss of Household Services Schedule</th>
                    </tr>
                    <tr>
                        <th>Start of
                            Loss Date
                        </th>


                        <th>End of Loss Date
                        </th>


                        <th>Hourly Rate
                        </th>

                        <th>Hours Per
                            Day
                        </th>
                        <th>% Impaired</th>
                        <th>Net Loss</th>

                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>2/26/2020</td>
                        <td>5/26/2021</td>
                        <td>$11.92</td>
                        <td>2.08</td>
                        <td>100%</td>
                        <td>$11,305.89</td>
                    </tr>
                    <tr>
                        <td>5/27/2021</td>
                        <td>5/26/2024</td>
                        <td>$11.92</td>
                        <td>2.08</td>
                        <td>25%</td>
                        <td>$6,793.45</td>
                    </tr>
                    <tr class="totalloss">
                        <td colspan="5">Total Loss of Household Services</td>
                        <td>$18,099.34</td>
                    </tr>
                </tbody>

            </table>




        </div>

        <div>
            <h4>3.6. Past and Future Pain and Suffering</h4>
            <p>As you know, Florida law allows for our client to be compensated for non-economic damages for
                the purpose of compensating a claimant for physical pain and suffering, emotional pain or
                anguish, physical impairment, loss of enjoyment of life, and all other nonpecuniary losses of any
                kind other than exemplary damages. No set formula exists under Florida law by which an award
                of non-economic damages can be measured. Such decisions are left to the common sense of the
                jury, and the jury enjoys wide latitude in determining the amount of non-economic damages to
                award. A personal injury victim in Florida can claim the full extent of his non-economic
                damages. Therefore, “per diem” arguments (i.e., a certain monetary amount for each day our
                client suffered from the pain and suffering as a result of the injuries sustained) are proper</p>

            <p class="note">[Note: the following pain and suffering narrative has been condensed for illustration
                purposes
                only.]</p>
            <p>There is no question that the collision on February 26, 2020, caused Mr. XXXX a great deal of
                physical and emotional pain and suffering. Since the collision, Mr. XXXX’s priorities have
                shifted from parenting and providing for his family to pain management. Mr. XXXX is
                prescribed Oxycodone up to three times daily for severe neck and back pain. He tries not to take
                it as often as prescribed; however, sometimes, it is simply, and unfortunately, a necessity. Pain,
                along with the use of narcotics, causes Mr. XXXX to tire easily, which makes it difficult to keep
                up with his former lifestyle and activities. Pain also negatively impacts Mr. XXXX’s quality of
                life, reduces his independence, and hinders his ability to engage in activities he once enjoyed.
                Despite his pre-collision neck and back injuries, Mr. XXXX enjoyed a physically active lifestyle,
                which included regular cardio exercise, running, and competing throughout Florida. To be clear,
                Mr. XXXX’s prior neck and back injuries never hindered or otherwise impeded his ability to run
                or participate in competitive races.</p>

            <div class="image-container">
                <img src="<?php echo $image_url;?>" alt="Accident Diagram">
            </div>
        </div>
        <div>
            <h4 class="gc-table-heading">Verdict Analysis</h4>
            <p>Based on case results with similar facts, we assert that Mr. XXXX is entitled to, at least, past and
                future pain and suffering damages in the amount of $1,000,000.00. As justification for this claim,
                we direct your attention to the following:
            </p>
            <p class="note">[Note: the following verdict analysis has been condensed for illustration purposes only.]
            </p>
        </div>

        <table class="medicalSummation">
            <thead>
                <tr>
                    <th colspan="2">Verdict

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Citation</td>
                    <td>Joseph Price v. Kevin Buccieri and Reliable Towing and Storage, Inc., 2018
                        Jury Verdicts LEXIS 37924.</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>Florida</td>
                </tr>
                <tr>
                    <td>County</td>
                    <td>St. Lucie</td>
                </tr>
                <tr>
                    <td>Award</td>
                    <td>$10,000,000.00 (including $8,197,303.00 for past and future pain and
                        suffering)</td>
                </tr>
                <tr>
                    <td>Summary</td>
                    <td>

                        On October 4, 2016, Joseph Price was traveling on the Florida Turnpike near
                        mile-marker 141 in Port St. Lucie, Florida. At the same time, Kevin Buccieri
                        was traveling behind Price in a flatbed truck when, suddenly and without
                        warning, Price was rear-ended by Buccieri. At trial, medical evidence revealed
                        that Price was diagnosed with multi-level spinal disc herniations at C3-4,
                        C5-C6, C6-C7, L3-L4, L4-5, and L5-S1. Price initially underwent
                        conservative treatment for his spinal injuries, which included physical therapy
                        and a lumbar epidural injection. In May 2017, Price underwent a
                        microdiscectomy and a laminectomy, followed by an anterior cervical disc
                        fusion at C3-C4, C5-C6, and C6-C7. Medical testimony revealed that Price
                        was still undergoing pain management treatment for his neck at the time of the
                        trial. The jury found in Price’s favor and awarded him $10,000,000.00.

                    </td>
                </tr>
                <tr>
                    <td>Relevance</td>
                    <td>
                        In both instances, Price and Mr. XXXX were injured as a result of a careless,
                        inattentive, or otherwise negligent driver. Mr. XXXX, like Price, suffered
                        multi-level spinal disc injuries that required conservative pain management
                        followed by a discectomy with spinal fusion. Like Price, Mr. XXXX suffered
                        a decreased range of motion in his neck, back, and lower extremities. Also,
                        like Price, Mr. XXXX required ongoing treatment and care under a pain
                        management specialist and an orthopedist. In addition, Mr. XXXX will require
                        future interdisciplinary pain management, orthopedic treatment and care,
                        physical therapy, and diagnostic imaging as he continues to undergo treatment
                        for the injuries he sustained in the collision. Therefore, we find that this
                        verdict represents a strong benchmark for estimating the amount of
                        compensation a similarly situated jury would award Mr. XXXX today.

                    </td>
                </tr>
            </tbody>
        </table>
        <p>Per Diem Analysis</p>
        <p>Our conservative per diem analysis shows that Mr. XXXX’s claim for past, present, and future
            pain and suffering is valued at $1,153,120.00. A jury will consider not only Mr. XXXX’s initial
            pain and suffering to date but also his subsequent pain and suffering. Below are some very
            conservative figures we would present to a jury to consider, in addition to his other damages:
        <ul>
            <li>$50.00/hr. for initial pain and suffering from February 26, 2020, to May 26, 2021; and</li>
            <li> $45.00/hr. for subsequent pain and suffering from May 27, 2021, to May 26, 2024</li>
        </ul>
        </p>

        <table class="projectclaim">
            <thead>
                <tr>
                    <th colspan="2">Pain & Suffering

                    </th>
                </tr>
                <tr>
                    <th colspan="2" class="economicdamage">Initial Pain & Suffering

                    </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Initial Period (in Days)
                    </td>
                    <td>456</td>
                </tr>
                <tr>
                    <td>Waking Hours/Day</td>
                    <td>16.0</td>
                </tr>
                <tr>
                    <td>Reasonable Compensation/Hour</td>
                    <td>
                        $50.00
                    </td>
                </tr>
                <tr class="subsequent">
                    <td>Total Initial Pain & Suffering</td>
                    <td>$364,000.00</td>
                </tr>
            </tbody>
        </table>
        <table class="projectclaim subsequentpain">
            <thead>

                <tr>
                    <th colspan="2" class="economicdamage">Subsequent Pain & Suffering

                    </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Subsequent Years with Pain
                    </td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Days/Year</td>
                    <td>365</td>
                </tr>
                <tr>
                    <td>Waking Hours/Day</td>
                    <td>
                        16.0
                    </td>
                </tr>
                <tr>
                    <td>Reasonable Compensation/Hour</td>
                    <td>$45.00</td>
                </tr>
                <tr class="subsequent">
                    <td>Total Subsequent Pain & Suffering</td>
                    <td>$789,120.00</td>
                </tr>
                <tr class="totalpain">
                    <td>Total Pain and Suffering</td>
                    <td>$1,153,120.00</td>
                </tr>
            </tbody>
        </table>
        <p>In light of the per diem analysis above, we assert that $1,000,000.00 is fair and equitable
            compensation for Mr. XXXX’s initial and subsequent pain and suffering</p>
    </div>
    <div>
        <h4>3.7. Punitive Damages</h4>
        <P>As you know, Florida law allows that punitive damages may generally be assessed when the act
            in question was committed with malice, moral turpitude, wantonness, willfulness, outrageous
            aggravation, or in reckless indifference to another person’s legal rights. Zuckerman v. Robinson,
            846 So. 2d 1257, 1258 (Fla. Dist. Ct. App. 2003). In Ingram v. Pettit, 340 So. 2d 922, 923-24
            (Fla. 1976), the court confronted the issue of whether a jury should be allowed to consider an
            award of punitive damages where negligence is coupled with intoxication, and decidedly held
            that “juries may award punitive damages where voluntary intoxication is involved in an
            automotive accident in Florida without regard to external proof of carelessness or abnormal
            driving.” Moreover, the jury has broad discretion in fixing an amount of punitive damages.
            Zuckerman at 1260. It is undisputed that Ms. XXXX was voluntarily intoxicated on the morning
            of February 26, 2020. Given the facts and circumstances giving rise to Mr. XXXX’s injuries, we
            believe that a jury would easily find that Ms. XXXX’s reckless and willful conduct on the date of
            the collision warrants the imposition of punitive damages. Therefore, we estimate that Mr.
            XXXX is entitled to $1,000,000.00 in punitive damages.</P>
    </div>
    <div>
        <h2>4. DEMAND TO SETTLE</h2>
        <p class="note">[Note: the following firm-specific demand conclusion has been condensed for illustration
            purposes only.]</p>
        <p>It has come to our attention that your client maintained a $2,000,000.00 umbrella policy. As you
            can see, our client’s damages are well above your client’s policy limits. Given the severity of the
            injuries sustained by Mr. XXXX, the likelihood of being able to settle within your client’s policy
            limits becomes slimmer with each passing day that Mr. XXXX’s damages continue to increase.
            You can settle Mr. XXXX’s claim by tendering a check for $2,000,000.00 to our office by 5:00
            P.M. on February 22, 2023.</p>
        <p><strong>Please note, any settlement in this matter, at any time, is also contingent upon prior receipt
                of complete Fla. Stat. § 627.4137 disclosures on all applicable policies to this collision.
                Finally, this correspondence and any accompanying attachments are to be utilized for this
                claim only and are classified as settlement negotiations under applicable law. <em>See,
                    e.g., Atwater v. Gulf Maint. & Supp., Inc.</em>, 424 So. 2d 135, 136 (Fla. Dist. Ct. App. 1982) (all
                parts of settlement offers are privileged).</strong></p>
        <p>Please do not hesitate to contact me if you have any additional questions or concerns. Thank you
            for your anticipated cooperation.</p>
        <p>Sincerely,</p>
        <p>Name,<span>Esquire</span></p>
    </div>
    <div>
        <h4 class="gc-table-heading">Exhibit List</h4>
        <table class="Exhibitlist">
            <thead>
                <tr>
                    <th>Exhibit No</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Florida Traffic Crash Report</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Photographs of Collision Intersection</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Photographs of Injuries</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Photographs of Client Prior to Collision</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Redacted Name Medical Center (Medical Records)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Redacted Name Orthopedics (Medical Records)</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Redacted Name Spine and Pain Center (Medical Records)</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Redacted Name Imaging Center (Medical Records)</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Redacted Name Anesthesia Consultants (Medical Records)</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Redacted Name Surgery Center (Medical Records)</td>
                </tr>
                <!-- More rows as needed -->
            </tbody>
        </table>
    </div>
    </div>
  
    <?php //wp_footer(); ?>
</body>
</html>
