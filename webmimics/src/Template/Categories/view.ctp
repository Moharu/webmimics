<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <a href="../"><button>Voltar</button></a> <br>
        Categoria: <b><?php foreach($categories as $category){
            echo $category->name;
        }?></b> <br>
        <?php
            echo $this->Form->create(); ?>
        <h4>Nova Mímica</h2>    
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'type' => 'text']);
            echo $this->Form->input('value', ['label' => 'Pontuacão']);
            echo $this->Form->button('Add');
            echo $this->Form->end();
        ?>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Mímica</th>
                    <th>Pontuação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mimics as $mimic): ?>
                <tr>
                    <td><?php echo $mimic->name; ?></td>
                    <td><?php echo $mimic->value; ?></td>
                </tr>
                <?php endforeach;?>        
            </tbody>
        </table>
        
    </body>    
</html>
