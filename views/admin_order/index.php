<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h1>
  Order list
</h1>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Order id
        </th>
        <th>
          Buyer name
        </th>
        <th>
          Buyer phone
        </th>
        <th>
          Date
        </th>
        <th>
          Status
        </th>
      </tr>
    </thead>


    <tbody>

      <?php foreach ($orderList as $order) : ?>
        <tr>
          <td data-title='Provider Name'>
            <?php echo $order['id']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $order['user_name']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $order['user_phone']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $order['date']; ?> $
          </td>
          <td data-title='E-mail'>
            <?php echo $order['status']; ?>
          </td>
          <td class='select'>
            <a class='button' href='/admin/order/view/<?php echo $order['id'] ?>'>
              View
            </a>
          </td>
          <td class='select'>
            <a class='button' href='/admin/order/update/<?php echo $order['id'] ?>'>
              Edit
            </a>
          </td>
          <td class='select'>
            <a class='button' href='/admin/order/delete/<?php echo $order['id'] ?>'>
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>


  </table>
</main>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>