<header>
        <div>
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div>
                    <?php foreach ($rsCategories as $key => $value) {
                        $name = $value['name'];
                        $id = $value['id'];
                        $subcategories = $value['subcategories'];
                        echo "<a class='categories' href='/?controller=categories&categories_id=$id'>$name</a>";
                        echo "<ul class='subcategoties'>";
                        foreach ($subcategories as $key => $value) {
                            $subname = $value['name'];
                            $sub_id = $value['id'];
                            echo "<li><a href='/?controller=categories&categories_id=$id&subcategories_id=$sub_id'>$subname</a></ali>";
                        }
                        echo "</ul>";
                    } ?>
                </div>
            </div>
        </div>
    </header>