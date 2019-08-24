@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Characters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('reports') }}">Reports</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active bg-dark text-white">Guides</a>
              </li>
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-5">
            <h1>Fishing & Cooking</h1>
            <h2>Apprentice Leveling: Skill at 1-75 (LEVEL 5)</h2>
            <h3> - Purchase Fishing Pole and 5 Shiny Baubles</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=6256" data-wowhead="item=6256"></a> x 1</li>
                <li><a href="https://classic.wowhead.com/item=6529" data-wowhead="item=6529"></a> x 5</li>
            </ul>
            <h3> - Purchase Recipe: Brilliant Smallfish and Recipe: Longjaw Mud Snapper</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=6325" data-wowhead="item=6325"></a> x 1</li>
                <li><a href="https://classic.wowhead.com/item=6328" data-wowhead="item=6328"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=4574" data-wowhead="npc=4574"></a></li>
                <li><a href="https://classic.wowhead.com/npc=3029" data-wowhead="npc=3029"></a></li>
                <li><a href="https://classic.wowhead.com/npc=3027" data-wowhead="npc=3027"></a></li>
            </ul>
            <h3 class="text-warning"> - Fish at Stonebull Lake to Skill Level of 75</h3>
            <img width="300" class="img-thumbnail" src="{{ asset('img/stonebull_lake.png') }}" alt="">

            <h3> - Catch:</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=6290" data-wowhead="item=6290"></a> x 60</li>
                <li><a href="https://classic.wowhead.com/item=4592" data-wowhead="item=4592"></a> x However many you get</li>
            </ul>

            <h3 class="text-danger"> - Cook Brilliant Smallfish to Skill Level of 50</h3>
            <h3 class="text-danger"> - Cook Longjaw Mud Snapper to Skill Level of 75</h3>

            <hr>
            <h2>Journeyman Leveling: Skill at 76-150 (LEVEL 10)</h2>
            <h3> - Purchase Recipe: Bristle Whisker Catfish</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=6330" data-wowhead="item=6330"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=2397" data-wowhead="npc=2397"></a></li>
            </ul>
            <h3 class="text-danger"> - Cook Longjaw Mud Snapper to Skill Level of 100</h3>
            <h3 class="text-warning"> - Fish at Tarren Mill River Fish to Skill Level of 150</h3>
            <img width="300" class="img-thumbnail" src="{{ asset('img/tarren_mill_river.png') }}" alt="">
            <h3> - Catch:</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=4593" data-wowhead="item=4593"></a> x 80 - 100</li>
            </ul>
            <h3 class="text-danger"> - Cook Bristle Whisker Catfish to Skill Level of 150</h3>
            <hr>
            <h2>Expert Leveling: Skill at 156-225 (LEVEL 20)</h2>
            <h3> - Purchase Expert Fishing - The Bass and You</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=16083" data-wowhead="item=16083"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=2626" data-wowhead="npc=2626"></a></li>
            </ul>
            <h3> - Purchase Expert Cookbook</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=16072" data-wowhead="item=16072"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=12033" data-wowhead="npc=12033"></a></li>
            </ul>
            <h3> - Purchase Recipe: Mithril Head Trout</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=17062" data-wowhead="item=17062"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=12033" data-wowhead="npc=12033"></a></li>
                <li><a href="https://classic.wowhead.com/npc=2664" data-wowhead="npc=2664"></a></li>
            </ul>
            <h3 class="text-warning"> - Fish at Stomgarde Keep to Skill Level of 225</h3>
            <img width="300" class="img-thumbnail" src="{{ asset('img/stomgarde_keep.png') }}" alt="">
            <h3> - Catch:</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=8364" data-wowhead="item=8364"></a> x 100+</li>
            </ul>
            <h3 class="text-danger"> - Cook Mithril Head Trout to Skill Level of 225</h3>
            <hr>
            <h2>Artisan Leveling: Skill 225 (LEVEL 35)</h2>
            <h3 class="text-warning"> - Quest Prerequisite Level 35, Fishing Skill 225</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/quest=6607" data-wowhead="quest=6607"></a></li>
                <img width="300" class="img-thumbnail" src="{{ asset('img/nat_pagle.png') }}" alt="">
            </ul>
            <h3 class="text-danger"> - Quest Prerequisite Level 35, Cooking Skill 225</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/quest=6610" data-wowhead="quest=6610"></a></li>
                <img width="300" class="img-thumbnail" src="{{ asset('img/quest_cooking.png') }}" alt="">
                <img width="300" class="img-thumbnail" src="{{ asset('img/quest_cooking2.png') }}" alt="">
                <ul>
                    <li><a href="https://classic.wowhead.com/item=8932" data-wowhead="item=8932"></a> x 20</li>
                </ul>
                <p>NPC who sell</p>
                <ul>
                    <li><a href="https://classic.wowhead.com/npc=6746" data-wowhead="npc=6746"></a></li>
                </ul>
            </ul>
            <hr>
            <h2>Artisan Leveling: Skill 226-300 (LEVEL 35)</h2>
            <h3> - Purchase Recipe: Filet of Redgill</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=13941" data-wowhead="item=13941"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=2664" data-wowhead="npc=2664"></a></li>
            </ul>
            <h3> - Purchase Recipe: Nightfin Soup and Recipe: Poached Sunscale Salmon</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=13945" data-wowhead="item=13945"></a> x 1</li>
                <li><a href="https://classic.wowhead.com/item=13946" data-wowhead="item=13946"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=8137" data-wowhead="npc=8137"></a></li>
            </ul>
            <h3> - Purchase Recipe: Baked Salmon</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=13949" data-wowhead="item=13949"></a> x 1</li>
            </ul>
            <p>NPC who sell</p>
            <ul>
                <li><a href="https://classic.wowhead.com/npc=8145" data-wowhead="npc=8145"></a></li>
            </ul>
            <h3 class="text-warning"> - Fish at Camp Mojache to Max Skill Level of 300</h3>
            <img width="300" class="img-thumbnail" src="{{ asset('img/camp_mojache.png') }}" alt="">
            <h3> - Catch:</h3>
            <ul>
                <li><a href="https://classic.wowhead.com/item=13930" data-wowhead="item=13930"></a></li>
            </ul>
            <h3 class="text-danger"> - Cook Filet of Redgill to Max Skill Level of 300</h3>

            <hr>
            <h2>Big Iron Fishing Pole</h2>
            <ul>
                <li><a href="https://classic.wowhead.com/item=6367" data-wowhead="item=6367"></a></li>
            </ul>
            <h2>Fishing Pole Quest (Level 44)</h2>
            <ul>
                <li><a href="https://classic.wowhead.com/quest=7815" data-wowhead="quest=7815"></a></li>
                <li><a href="https://classic.wowhead.com/item=19022" data-wowhead="item=19022"></a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <i>Source: Icosiol - <a href="https://www.youtube.com/watch?v=2Cp35ybNAgU">https://www.youtube.com/watch?v=2Cp35ybNAgU</a></i>
        </div>
    </div>
</div>

@endsection
