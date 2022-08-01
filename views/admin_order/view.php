<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h1>
  View order number <?php echo $id; ?>
</h1>
<h2>
  Information about order:
</h2>

<main>
  <table>
    <thead>
      <tr>
        <th>
          Order number
        </th>
        <th>
          Client name
        </th>
        <th>
          Client phone
        </th>
        <th>
          Client comment
        </th>
        <th>
          Client id
        </th>
        <th>
          Order status
        </th>
        <th>
          Order date
        </th>
      </tr>
    </thead>


    <tbody>


      <tr>
        <td data-title='Provider Name'>
          <?php echo $id; ?>
        </td>
        <td data-title='E-mail'>
          <?php echo $order['user_name']; ?>
        </td>
        <td data-title='E-mail'>
          <?php echo $order['user_phone']; ?>
        </td>
        <td data-title='E-mail'>
          <?php echo $order['user_comment']; ?>
        </td>
        <td data-title='E-mail'>
          <?php echo $order['user_id']; ?>
        </td>
        <td data-title='E-mail'>
          <?php echo Order::getStatusText($order['status']); ?>
        </td>
        <td data-title='E-mail'>
          <?php echo $order['date']; ?>
        </td>

      </tr>


    </tbody>






    <table>
      <thead>
        <br>

        <br>
        <h2>
          Information about products in order:
        </h2>
        <tr>
          <th>
            Product id
          </th>
          <th>
            Code
          </th>
          <th>
            Name
          </th>
          <th>
            Price
          </th>
          <th>
            Quantity
          </th>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($products as $product) : ?>
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
            <td data-title='E-mail'>
              <?php echo $productsQuantity[$product['id']]; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>


    </table>


</main>




<?php include ROOT . '/views/layouts/footer_admin.php'; ?>