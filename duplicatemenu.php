 <?php
 //controller
 public function duplicate($id)
    {
        $menu = Voyager::model('Menu')->findOrFail($id);

        $menuItems = Voyager::model('MenuItem')::where('menu_id','=', "$id");
        
        $menu->name = "$menu->name copy";
    
        $newMenu = $menu->replicate();

        $newMenu->save();

        $menuItems->menu_id = "$newMenu->id";

        $menuItems->replicate()->save();

        return redirect()
            ->route('voyager.menus.builder',["$newMenu->id"])
            ->with([
                'message'    => __('voyager::menu_builder.successfully_copied'),
                'alert-type' => 'success',
            ]);
    }

    ?>   
    
    
<!-- button -->
    <a href="{{ route('voyager.'.$dataType->slug.'.duplicate', $data->{$data->getKeyName()}) }}" class="btn btn-sm btn-primary pull-right edit">
    <i class="voyager-edit"></i> {{ __('voyager::generic.duplicate') }}
</a>



<!-- //route -->
<?php
Route::get('/duplicate', ['uses' => $namespacePrefix.'VoyagerMenuController@duplicate',    'as' => 'duplicate']);