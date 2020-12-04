{foreach $teacherList as $teacher }
    <div data-id="{$teacher['id']}" class="course-b" onclick="window.location.href='/details.php?key=teacher&id={$teacher['id']}'">

        <div class="course-po">
        <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$teacher['image']});"></div>
        </div>
    
        <div class="course-bttom t-bttom">
            <div class='t-n'>
                <div class="t-l-l">
                <p class="tea-n">{$teacher['name']}</p>
                <p class="tea-job">{$teacher['site']}-{$teacher['category_job_id']}</p>
                </div>
                <div class='limg'>
                    <img src="public/images/l.png" /> 
                </div>
            </div>
            <div class="tea-lin"></div>

            <div class="tea-bottom">
                <div class="tea-box">
                    <img class="tea-icon" src="public/images/f-icon.jpg">
                    <p class="wjs-a c-ellipse c-paragraph youziku-48c15647d6414b1d865b2ee9b7d53df4 paragraph_BwfXWq" data-c_e_id="paragraph84e56f49">
                        城市/景观
                    </p>
                </div>
                <div class="tea-bo">
                    <p class="c-ellipse c-paragraph paragraph_yLkgCS">
                        哈佛大学
                    </p>
                    <p class="c-ellipse c-paragraph paragraph_yLkgCS2">
                        RAC Studio创始人
                    </p>
                </div>
            </div>

        </div>
    </div>
{/foreach}
