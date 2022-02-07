<!-- form.php -->
<form action="">
                    <div class="container info">
                        <h2 class="red-text">Order Info</h2>
                            <label for="name">Your Name &#x2a;</label>
                                <span class="error"></span>
                            <input type="text" name="name" id="name" value="">

                            <label for="email">Email &#x2a;</label>
                                <span class="error"></span>
                            <input type="email" minlength="1" name="email" id="email" value="">

                            <label for="phone">Phone Number &#x2a;</label>
                                <span class="error"></span>
                            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="">

                            <span class="required"><small><i>&#x2a; required</i></small></span>
                    </div><!--end customer info-->

                    <div class="container">
                        <h2>Thai Curry</h2>
                        <label class="red-text" for="thai">Spice Level</label>
                        <ul>
                            <li>Mild &#x2a;<input name="thai" id="" type="radio" value="mild"></li>
                            <li>Medium &#x2a; &#x2a;<input name="thai" id="" type="radio" value="medium"></li>
                            <li>Spicy &#x2a; &#x2a; &#x2a;<input name="thai" id="" type="radio" value="spicy"></li>
                        </ul>
                    </div><!--end thai-->

                    <div class="container">
                        <label class="red-text" for="category_two">Indian Curry</label>
                        <ul>
                            <li>Massaman Curry<input name="category_two" id="" type="radio" value="massaman"></li>
                            <li>Panang Curry<input name="category_two" id="" type="radio" value="panang"></li>
                            <li>Coconut Curry<input name="category_two" id="" type="radio" value="coconut"></li> 
                        </ul>   
                    </div><!--end indian-->

                    <div class="container">
                        <label class="red-text" for="category_three">Japanese Curry</label>
                        <ul>
                            <li>Chicken Curry<input name="category_three" id="" type="radio" value="chicken"></li>
                            <li>Vegan Curry<input name="category_three" id="" type="radio" value="vegan"></li>
                            <li>Beef Curry<input name="category_three" id="" type="radio" value="beef"> </li> 
                        </ul>
                    </div><!--end japanese-->

                    <div class="container">
                        <label class="red-text" for="category_four">Sides</label>
                        <ul>
                            <li><input name="category_one" id="" type="radio" value="white">White Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="radio" value="brown">Brown Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="radio" value="sticky">Sticky Rice ~ <span class="price italicize">$999.00</span></li> 
                            <li><input name="category_one" id="" type="radio" value="basmati">Basmati Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="radio" value="cauliflower">Cauliflower Rice ~ <span class="price italicize">$999.00</span></li>
                        </ul> 
                    </div><!--end sides-->
                    </form>