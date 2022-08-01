<?php 

class Category{

    public static function getCategoriesList(){

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id, name FROM categories ORDER BY sort_order ASC LIMIT 3');

        $i = 0;

        while($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;

    }

    public static function getCategoriesListAdmin(){

        $db = Db::getConnection();
        $result = $db->query('SELECT id, name, sort_order, status FROM categories ORDER BY sort_order ASC');

        $categoryList = array();
        $i = 1;

        while($row = $result->fetch()) {

            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];

            $i++;

        }
        return $categoryList;

    }

    public static function deleteCategoryById($id){

        $db = Db::getConnection();

        $sql = 'DELETE FROM categories WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();

    }

    public static function createCategory($options){
        $db  = Db::getConnection();
        $sql = 'INSERT INTO categories (name, sort_order, status) VALUES (:name, :sort_order, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);

        if($result->execute()){
            return $db->lastInsertId;
        } else{
            return 0;
        }
    }

    public static function getLastCategorySortOrder(){

        $db = Db::getConnection();
        $sql = 'SELECT sort_order FROM categories ORDER BY sort_order DESC LIMIT 1';
        $sth = $db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
         return $result;
        


    }

    public static function updateCategoryById($id, $options){

        $db = Db::getConnection();

        $sql = 'UPDATE categories SET name = :name, sort_order = :sort_order, status = :status WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();


    }
}

?>