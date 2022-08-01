<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h1>
  Categories list
</h1>
<div class="shop-button-wrapper"><a href="category/create" class="btn w-button"> + Add category</a></div>
</div>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Id
        </th>
        <th>
          Name
        </th>
        <th>
          Sort order
        </th>
        <th>
          Status
        </th>
      </tr>
    </thead>


    <tbody>

      <?php foreach ($categoryListAdmin as $category) : ?>
        <tr>
          <td data-title='Provider Name'>
            <?php echo $category['id']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $category['name']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $category['sort_order']; ?>
          </td>
          <td data-title='E-mail'>
            <?php echo $category['status']; ?>
          </td>
          <td class='select'>
            <a class='button' href='/admin/category/update/<?php echo $category['id'] ?>'>
              Edit
            </a>
          </td>
          <td class='select'>
            <a class='button' href='/admin/category/delete/<?php echo $category['id'] ?>'>
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>


  </table>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>