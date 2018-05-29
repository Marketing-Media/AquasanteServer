<div class="section ">
    <div class="col-12 text">
        <h2>{l s='Use Your Berkey[1]®[/1] System Everywhere' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="At HOME or at WORK" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="For small or large GROUPS" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="In hospitality and catering" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="In healthcare facilities" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="At the COTTAGE or CAMPING" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="During sporting and outdoor activities" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="During foreign travel" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="For EMERGENCY PREPAREDNESS" d='Shop.Theme.Global'}</li>
        </ul>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'} <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i></a>
        <a href="#" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'} <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i></a>
    </div>
    <div class="col-12 img">
        <img src="{$urls.img_url}home1.jpg" alt="">
    </div>
</div>
<div class="section ">
    <div class="col-12 img">
        <img src="{$urls.img_url}home2{if $language.iso_code == qc}fr{/if}.png" alt="">
    </div>
    <div class="col-12 text">
        <h2>{l s='Berkey[1]®[/1] Removes Harmful Contaminants From Water' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="Chlorine, THM’s, and other harmful derivatives" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="Chemicals, PHARMACEUTICALS, hormones" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="Pesticides & agricultural run-off" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="HEAVY METALS (lead, mercury, chromium, etc.)" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="Volatile Organic Compouds (VOC’s)" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="Petroleum products" d='Shop.Theme.Global'}</li>
            <li><span class="fa-li"><i class="far fa-chevron-right fa-xs"></i></span></span>{l s="FLUORIDE (when fitted with PF-2 post-flters)" d='Shop.Theme.Global'}</li>
        </ul>
        <div class="abs blackbot">
        <img src="{$urls.img_url}abs2{if $language.iso_code == qc}fr{/if}.png" alt="">
        </div>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'} <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i></a>
        <a href="{url entity='category' id='3'}" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'} <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i></a>
    </div>
</div>
<div class="section  comparision">
        
            <h2>{l s='Berkey[1]®[/1] is the most cost-effective water solution on the market' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h2>
            <h3>{l s='Berkey[1]®[/1] COST VS. OTHER FILTERED WATERS' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h3>        
            <div class="grid">
                <div class="labels">
                    <div class="name"></div>
                    
                    <div class="unit">
                        {l s='Unit Cost (aprox)' d='Shop.Theme.Global'}
                    </div>
                    <div class="cost">
                        {l s='Cost per liter' d='Shop.Theme.Global'}
                    </div>
                </div>
                <div class="prod berkley">
                    <img src="{$urls.img_url}comp1.jpg" alt="">
                    <div class="name">Berkey<sup>®</sup></div>
                    <div class="unit">{l s='$300+' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='1.4¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp2.jpg" alt="">
                    <div class="name">BRITA Pitcher</div>
                    <div class="unit">{l s='$30' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='4.1¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp3.jpg" alt="">
                    <div class="name">BRITA Faucet</div>
                    <div class="unit">{l s='$37' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='5.1¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp4.jpg" alt="">
                    <div class="name">SANTEVIA</div>
                    <div class="unit">{l s='$200' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='4.0¢/liter' d='Shop.Theme.Global'}</div>
                </div>
            </div>
            <h3>{l s='Berkey[1]®[/1] COST VS. BOTTLED WATERS' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h3>
            <div class="grid">
                <div class="labels">
                    <div class="name"></div>
            
                    <div class="unit">
                        {l s='Unit Cost (aprox)' d='Shop.Theme.Global'}
                    </div>
                    <div class="cost">
                        {l s='Cost per liter' d='Shop.Theme.Global'}
                    </div>
                </div>
                <div class="prod berkley">
                    <img src="{$urls.img_url}comp1.jpg" alt="">
                    <div class="name">Berkey
                        <sup>®</sup>
                    </div>
                    <div class="unit">{l s='$300+' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='1.4¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp5.jpg" alt="">
                    <div class="name">{l s='18 Liters' d='Shop.Theme.Global'}</div>
                    <div class="unit">{l s='$5' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='28¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp6.jpg" alt="">
                    <div class="name">{l s='4 Liters' d='Shop.Theme.Global'}</div>
                    <div class="unit">{l s='$2' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='50¢/liter' d='Shop.Theme.Global'}</div>
                </div>
                <div class="prod">
                    <img src="{$urls.img_url}comp7.jpg" alt="">
                    <div class="name">{l s='24 x 500ml' d='Shop.Theme.Global'}</div>
                    <div class="unit">{l s='$4' d='Shop.Theme.Global'}</div>
                    <div class="cost">{l s='33¢/liter' d='Shop.Theme.Global'}</div>
                </div>
            </div><div class="butcont">
                
             <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'}
                <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
            </a>
            <a href="{url entity='category' id='3'}" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'}
                <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i>
            </a>
            </div>
</div>
<div class="section difu">
    <div class="col-12 text">
        <h2>{l s='Never Run Out of SAFE, PURE Drinking Water' d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Berkey® removes 99.9[1] of BACTERIA and VIRUSES'  sprintf=['[1]' => '%'] d='Shop.Theme.Global'}
            </li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Use with untreated water (wells, lakes, rivers)' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Stop carrying water to the cottage' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Use during BOIL WATER ADVISORIES' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Be ready for environmental & natural disasters' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Use a portable Berkey® abroad with unsafe water sources' d='Shop.Theme.Global'}</li>

        </ul>
        <div class="abs bluebot">
        <img src="{$urls.img_url}abs1{if $language.iso_code == qc}fr{/if}.png" alt="">
        </div>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
        </a>
        <a href="{url entity='category' id='3'}" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i>
        </a>
    </div>
    <div class="col-12 img">
        <img src="{$urls.img_url}home3.jpg" alt="">
    </div>
</div>
<div class="section difu">
    <div class="col-12 img">
        <img src="{$urls.img_url}home4.jpg" alt="">
    </div>
    <div class="col-12 text">
        <h2>{l s='Reduce Your Environmental Footprint' d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='An earth-friendly alternative to bottled water' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Reduce plastic waste and greenhouse gases' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Eliminate water wastage associated with the bottled water industry' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='2 Black Berkey® Elements can treat up to 6000 gallons (22,700 liters) of water. That’s the equivalent of 150 Brita filters that won’t end up in the landfill.' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Durable stainless steel reservoirs will last a lifetime and will never leach harmful chemicals into water' d='Shop.Theme.Global'}</li>
        </ul>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
        </a>
        <a href="{url entity='category' id='3'}" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i>
        </a>
    </div>

</div>
<div class="section difu">
    
    <div class="col-12 text">
        <h2>{l s='Berkey[1]®[/1] Water Helps Keep Your Body in Balance' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Berkey® purifiers produce BALANCED pH water of 7' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='The pH of Reverse Osmosis water is 5, which is 100 times more acidic than our body’s balanced pH' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Berkey® systems KEEP MINERALS IN THE WATER' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Reverse Osmosis water and distilled water are demineralized and leach essential minerals from our body' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='The clean and REFRESHING TASTE of Berkey® water will make you want to DRINK MORE WATER' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Vortex your Berkey® water for even greater health benefits' d='Shop.Theme.Global'}</li>
        </ul>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
        </a>
        <a href="#" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i>
        </a>
    </div>
    <div class="col-12 img">
        <img src="{$urls.img_url}home5.jpg" alt="">
    </div>
</div>
<div class="section difu">
    <div class="col-12 img">
        <img src="{$urls.img_url}home6.jpg" alt="">
    </div>
    <div class="col-12 text">
        <h2>{l s='Berkeys[1]®[/1] are Easy to Use and Maintain' sprintf=['[1]' => '<sup>','[/1]' => '</sup>'] d='Shop.Theme.Global'}</h2>
        <ul class="fa-ul">
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Quick and easy to set up' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='No plumbing nor electricity required' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='No tools required' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Filters can be EASILY CLEANED using a scouring pad and running water when flow rate decreases' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                 {l s='Well maintained Black Berkey® flters LAST FOR YEARS' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Fluoride post-flters must be changed every 1000 gallons (4000 liters)' d='Shop.Theme.Global'}</li>
            <li>
                <span class="fa-li">
                    <i class="far fa-chevron-right fa-xs"></i>
                </span>
                {l s='Stainless steel components can be cleaned with a soft sponge, dishsoap and water.' d='Shop.Theme.Global'}</li>
        </ul>
        <a href="#" class="btn btn-outline-secondary btn-lg" role="button">{l s='Learn More' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
        </a>
        <a href="{url entity='category' id='3'}" class="btn btn-secondary btn-lg" role="button">{l s='Shop Now' d='Shop.Theme.Global'}
            <i class="fas fa-chevron-right fa-xs" data-fa-transform="up-1"></i>
        </a>
    </div>

</div>