<x-layout.template>
<x-slot name="title">My Cart Box</x-slot>
<div>
    <div class="container">
        <table class="table">
            <tr>
                <th></th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
                <td>Whole Chicken</td>
                <td>
                    <input type="number" name="" min="1" max="10"id="" value="1">
                </td>
                <td>Rs 500</td>
                <td>Rs. 500</td>
                <td>
                    <a href="" class="badge bg-info">Edit</a>
                </td>
            </tr>
        </table>
    </div>
</div>

</x-layout.template>