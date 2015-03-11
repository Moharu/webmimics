<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo $this->Form->create();
            echo $this->Form->input('name', ['label' => 'New Category']);
            echo $this->Form->button('Add');
            echo $this->Form->end();
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $category): ?>
                <tr>
                    <td><a href="../categories/view/<?php echo $category->id; ?>"><?php echo $category->name; ?></a></td>
                </tr>
                <?php endforeach;?>        
            </tbody>
        </table>
        
    </body>    
</html>
