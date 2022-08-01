<?php include ROOT.'/views/layouts/header_admin.php';?>

<h1>
  Products list
</h1>
<div class="shop-button-wrapper"><a href="product/create"
              class="btn w-button"> + Add product</a></div>
</div>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Product id
        </th>
        <th>
          Product code
        </th>
        <th>
          Product name
        </th>
        <th>
          Product price
        </th>
      </tr>
</thead>


    <tbody>

    <?php foreach($productsList as $product): ?>
      <tr>
        <td data-title='Provider Name'>
          <?php echo $product['id']; ?>
        </td>
        <td data-title='E-mail'>
           <?php echo $product['code']; ?>
        </td>
        <td data-title='E-mail'>
        <?php echo $product['name']; ?>
        </td>
        <td data-title='E-mail'>
        <?php echo $product['price']; ?> $
        </td>
        <td class='select'>
          <a class='button' href='/admin/product/update/<?php echo $product['id']?>'>
            Edit
          </a>
        </td>
        <td class='select'>
          <a class='button' href='/admin/product/delete/<?php echo $product['id']?>'>
            Delete
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>


  </table>
</main>

<?php include ROOT.'/views/layouts/footer_admin.php';?>

