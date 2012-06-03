<div class="widget">
    <h3 class="widgettitle">{h3}</h3>
    <div id="promo_44">
        <ul>
            {features}
            <!-- specify width/height when using HTML to help out older browsers slide HTML content -->
            <li class="clearfix" style="width:300px; height:55px;">
                <p><strong>{strong}</strong><br />{p}</p>
            </li>
            {/features}
        </ul>
        <p><a href="#" class="next">View Next Feature &raquo;</a></p>
    </div>
    <script type="text/javascript">
        jQuery(function($){ $("#promo_44 UL").cycle({ /* add options here */ fx:'scrollUp',next:'#promo_44 .next', timeout:0, speed:500 }); });
    </script>
</div>