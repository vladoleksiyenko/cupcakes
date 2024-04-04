<!--Vlad O, Eugene F-->
<!--4/4/2024-->
<!--https://voleksiyenko.greenriverdev.com/328/cupcakes/-->
<!--Cupcake form that once submitted presents the user with a receipt page-->
<!--Version: 1.0-->

<html>
    <header>
        <link rel='stylesheet' href='styles.css'>
    </header>
    <form action='process.php' method='POST'>
        <label>Your name:</label>
        <input type='text' id='user-name' name='user-name'>
        <label>Cupcake flavors:</label>
        <input type='checkbox' name='flavor[]' value="The Grasshopper">The Grasshopper</input>
        <input type='checkbox' name='flavor[]' value="Whiskey Maple Bacon">Whiskey Maple Bacon</input>
        <input type='checkbox' name='flavor[]' value="Carrot Walnut">Carrot Walnut</input>
        <input type='checkbox' name='flavor[]' value="Salted Caramel Cupcake">Salted Caramel Cupcake</input>
        <input type='checkbox' name='flavor[]' value="Red Velvet">Red Velvet</input>
        <input type='checkbox' name='flavor[]' value="Lemon Drop">Lemon Drop</input>
        <input type='checkbox' name='flavor[]' value="Tiramisu">Tiramisu</input>
        <button type='submit'>Order</button>
    </form>
</html>