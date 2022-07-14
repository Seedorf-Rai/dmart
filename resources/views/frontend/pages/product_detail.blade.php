<x-layout.template>
<x-slot name="title">Product Detail Page </x-slot>
<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
        <img src="https://thumbs.dreamstime.com/b/whole-raw-chicken-close-up-plate-lettuce-isolated-white-background-106585803.jpg" class="img-fluid" alt="">
            
        </div>  
        <div class="col-md-8">
         <form action="" method="post">
            @csrf
            <h2>Fresh Chicken Meat</h2>   
            <span class="text-danger text-decoration-line-through me-3">Rs. 500</span> 
            <span>Rs. 400 Only</span>
            <p class="my-2">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officiis, repellendus quaerat pariatur non vitae! Laborum iusto corrupti officia quos. Dolore reprehenderit voluptatem dolorem! Ea provident voluptatibus dolorem architecto soluta sunt? Ad incidunt repudiandae vel voluptas asperiores minima nihil soluta nostrum optio voluptatem similique corrupti blanditiis obcaecati dolor, reiciendis molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aperiam asperiores perspiciatis, mollitia facere eum ex quisquam quidem inventore natus assumenda quae. Et, iste nemo earum vitae consequuntur atque nihil id aspernatur nostrum aliquid eum magni laudantium minima quibusdam, accusamus inventore aperiam sed quae animi illo odio provident nesciunt. Reprehenderit?
            </p>
            <input type="number" max="10" min="1" value="1">
            @guest
            <a href="/login" class="btn btn-primary"> Add to Cart</a>
            @else
            <button type="submit" class=" btn btn-success">Add To Cart</button>
            
            @endguest
            
            
         </form>
        </div>  
    </div>
</div>

</x-layout.template>