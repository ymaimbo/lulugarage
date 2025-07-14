<?php
use Inertia\Testing\AssertableInertia;

use function Pest\Laravel\get;

it('should return the correct component', function (){
     get(route('services.index'))
         ->assertInertia(fn (AssertableInertia $inertia) =>
         $inertia ->component('Services/Index',true)
         );
 });