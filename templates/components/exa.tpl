{foreach $exaList as $data }

<div data-id="{$data['id']}" class="course-b case-b" onclick="window.location.href='/details.php?key=exa&id={$data['id']}'">
    <div class="course-po case-po">
    <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
        
    <div class="ca-bottom" >
        <div class="ca-n">
        
            <p class="c-ellipse c-paragraph youziku-dc3470e3a1754f5197b8b7e1610f0499 paragraph_AYC841">
                {$data['name']}
            </p>
            <div class="ca-l">
            </div>
        </div>
    </div>
    </div>
</div>
{/foreach}
