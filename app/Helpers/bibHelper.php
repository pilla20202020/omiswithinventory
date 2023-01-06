        <?php

        use App\Models\Country\Country;
        use App\Models\Setting\Setting;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Schema;
        use App\Models\Settings\UserSettings;



        function label($text)
        {
            //here we will write translator code
            //below is only example, we have to use session to check current language setting to use or not using the following dictonary
            //this dictonary must be fetched from settings in main application

            $dictonary = array(
                "Command" => "प्रयोग",
                "Industry Name" => "उद्योगको नाम",
                "Industry Address" => "उद्योगको ठेगाना",
                "Phone No" => "फोन नं "
            );
            if (array_key_exists($text, $dictonary)) $text = $dictonary[$text];
            echo $text;
        }

        function createInput($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "", $min = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="<?php echo $class; ?>">
                <?php echo label($display); ?>
            </label>
            <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" min="<?php echo $min; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value ? $value : ''; ?>">
        <?php
        }
        ?>

        <?php
        function createText($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <div class="form-control-wrap">
                <input type="text" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
            </div>
        <?php
        }
        ?>

       
        <?php
        function createNumber($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
            <input type="number" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createDate($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo $display; ?> </label>
            <input type="date" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function createRadio($name, $id, $class = "", $values = array())
        {
        ?>
            <?php $sn = 0;
            for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                $d = $values[$i][1];
                $sn++; ?>
                <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1 main-head"> <?php echo $d; ?> </label><?php endif; ?>
                    </div>
                <?php endfor; ?>

            <?php
        }
            ?>


            <?php
            //Another Radio for non bolds
            function createRadio2($name, $id, $class = "", $values = array())
            {
            ?>

                <?php $sn = 0;
                for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                    $d = $values[$i][1];
                    $sn++; ?>
                    <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1"> <?php echo $d; ?> </label><?php endif; ?>
                        </div>

                    <?php endfor; ?>

                <?php
            }
                ?>

            
                <?php
                //Select Dropdown
                function createSelect($name, $id, $class = "", $display, $values = array())
                {
                ?>
                    <select class="js-select <?php $class; ?>" name="<?php echo $name; ?>" aria-label="Default select example" data-search="true" data-sort="false">
                        <?php $sn = 0;
                        for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                            $d = isset($values[$i]) ? $values[$i] : "";
                            $sn++; ?>

                            <option value="<?php echo $v; ?>"><?php echo ($d) ? $d : $v; ?></option>

                        <?php endfor; ?>
                    </select>
                    <?php
                }
                    function customCreateSelect($name, $id, $class = "form-control", $display, $values = array(),$keyValue='')
                    {
                    ?>
                        <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
                        <div class="form-control-wrap">
                        <select class="form-select" name="<?php echo $name; echo $class; ?>" id="<?php echo $name; ?>" aria-label="Default select example">
                            <?php foreach ($values as $key => $value) { ?>
                                <option value="<?= $key ?>" <?php echo $keyValue == $key ? 'selected' : '' ?>><?= $value ?></option>
            <?php } ?>
                        </select>
                        </div>

            <?php            }
            //End of Select
            ?>

            <?php
            //Create Checkbox 
            function createCheck($name, $id, $display, $class = "", $value = "", $placeHolder = "")
            {
            ?>
                <div class="form-check">
                    <input type="checkbox" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $value; ?>">
                    <label for="<?php echo $id; ?>" class="form-check-label"> <?php echo $display; ?> </label>
                </div>
            <?php
            }
            ?>

            
            <?php
            //for label
            function createLabel($for = "", $class = "", $display)
            {
            ?>
                <label for="<?php echo $for; ?>" class="<?php echo $class; ?>">
                    <?php echo label($display); ?>
                </label>
            <?php
            }
            ?>
           
            <?php
            //for button
            function createButton($class = "", $type = "", $display)
            {
            ?>
                <button class="btn <?php echo $class; ?>" type="submit">
                    <?php echo $display ?>
                </button>
            <?php
            }
            ?>

            <?php
            function createTextArea($class = "", $id = "", $row = "", $display)
            {
            ?>
                <textarea class="form-control" id="<?php echo $id; ?>" rows="<?php echo $row; ?>">
                <?php echo $display; ?>
            </textarea>
            <?php
            }
            ?>

            <?php
            function inputwithbottommargin($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "")
            {
            ?>
                <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control mb-2" value="<?php echo $value; ?>">
            <?php
            }
            ?>

            <?php
            function master_getColumn($tableName)
            {
                return Schema::getColumnListing($tableName);
            }

            function master_storeColumn($tableName, $data)
            {
                $allcolumns = Schema::getColumnListing($tableName);

                $datakey = array_keys($data);
                // dd($allcolumns, $data);
                foreach ($data as $key => $value) {
                    if (in_array($key, $allcolumns)) {
                        DB::table($tableName)->insert($data);
                        return true;
                    }
                }
            }

            function master_updateColumn($tableName, $data, $id)
            {
                $allcolumns = Schema::getColumnListing($tableName);

                $datakey = array_keys($data);
                // dd($allcolumns, $data);
                foreach ($data as $key => $value) {
                    if (in_array($key, $allcolumns)) {
                        DB::table($tableName)->where('country_id', $id)->update($data);
                        return true;
                    }
                }
            }

            function usersetting($query)
            {
                $usersetting = UserSettings::fetch($query)->where('user_id', auth()->user()->id)->first();

                return $usersetting ? $usersetting->value : null;
            }

            ?>