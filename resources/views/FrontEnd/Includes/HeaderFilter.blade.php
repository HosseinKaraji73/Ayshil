<ul class="ulSearch">
    @foreach($productsActive as $productActive)
     <a class="aSearch" href="{{action('FrontEnd\ProductController@show' ,[$productActive->id,$productActive->title,$productActive->title_en])}}"><li>{{$productActive->title}}<</li></a>
    @endforeach
</ul>
