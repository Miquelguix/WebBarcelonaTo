<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
   
    use WithPagination;

    public $paginate = 10;
    public $action = 'crear';
    public $name, $slug, $icon, $body;

    
    private function resetInput()
    {
        $this->name = null;
        $this->slug = null;
        $this->icon = null;
        $this->body = null;
    }

    private function slug($slug='-', $maxlength=50){
        $string = strip_tags($this->name);
        $seo = strtolower(trim(preg_replace('~[^0-9a-z]+~i', $slug, html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), $slug));
        
        if(strlen($seo) > $maxlength)
        {
        	$seo = substr($seo, 0, $maxlength);
        	$pos = (int)strrpos($seo, $slug); //ultima posicion de la busqueda
        	if($pos)
        		$seo = substr($seo, 0, $pos);       	
        }

        	
        $this->slug = $seo;
    }

    public function render(){

        $this->slug();
        return view('livewire.Categories', [
        'items' => Category::orderBy('id','DESC')->paginate($this->paginate)
        ]);
    }
    
    public function destroy($id)
    {    
        Category::destroy($id);
    }
    
    public function edit($id)
    {
            $tag = Category::find($id);
            $this->name = $tag->name;
            $this->slug = $tag->slug;

            $this->action = "actualizar";
    }
        
    public function crear()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'text',
            'body' => 'text'
        ]);

        $this->slug();

        Category::create([
            'name' => $this->name,
            'slug' => $this->slug
        ]);

        $this->resetInput();
    }
    
}
