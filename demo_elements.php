<div class="wrapper">
    
    <h1>Grid</h1>
    <hr><br>
    <p>The tests are based on the OOCSS <a href="http://oocss.org/grids_docs.html">litmus test</a></p>
    <p>To demonstrate the responsive potential of the grid each element will be set to span a full column width at the mobile breakpoint. You can control it however you like and the grid doesn't require an element to span a whole column.</p>

    <h2>Halves</h2>

    <code>
        <pre>
&lt;div class="span--1-1  span--1-2--m">
    &lt;p>span--1-2&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-2--m">
    &lt;p>span--1-2&lt;/p>
&lt;/div></pre>
    </code>
    <div class="grid">
        <div class="span--1-1  span--1-2--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-2--m</p></div>
        </div>
        <div class="span--1-1  span--1-2--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-2--m</p></div>
        </div>
    </div>


    <h2>Thirds</h2>

    <code>
        <pre>
&lt;div class="span--1-1  span--1-3--m">
    &lt;p>span--1-3&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-3--m">
    &lt;p>span--1-3&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-3--m">
    &lt;p>span--1-3&lt;/p>
&lt;/div>

&lt;div class="span--1-1  span--1-3--m">
    &lt;p>span--1-3&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--2-3--m">
    &lt;p>span--2-3&lt;/p>
&lt;/div></pre>
    </code>
    <div class="grid">
        <div class="span--1-1  span--1-3--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--1-3--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--1-3--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-3--m</p></div>
        </div>
         <div class="span--1-1  span--1-3--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--2-3--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--2-3--m</p></div>
        </div>
    </div>

     <h2>Quarters</h2>

    <code>
        <pre>
&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>

&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--2-4--m">
    &lt;p>span--1-1  span--2-4--m&lt;/p>
&lt;/div>

&lt;div class="span--1-1  span--1-4--m">
    &lt;p>span--1-1  span--1-4--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--3-4--m">
    &lt;p>span--1-1  span--3-4--m&lt;/p>
&lt;/div></pre>
    </code>
    <div class="grid  grid--equal-height">
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--2-4--m">
            <div style="background: #e0e0e0; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--2-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--3-4--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--3-4--m</p></div>
        </div>
    </div>

    <h2>Fifths</h2>

    <code>
        <pre>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>

&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--1-5--m">
    &lt;p>span--1-1  span--1-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--2-5--m">
    &lt;p>span--1-1  span--2-5--m&lt;/p>
&lt;/div>

&lt;div class="span--1-1  span--2-5--m">
    &lt;p>span--1-1  span--2-5--m&lt;/p>
&lt;/div>
&lt;div class="span--1-1  span--3-5--m">
    &lt;p>span--1-1  span--3-5--m&lt;/p>
&lt;/div></pre>
    </code>
    <div class="grid">
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--1-5--m</p></div>
        </div>
         <div class="span--1-1  span--2-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--2-5--m</p></div>
        </div>

        <div class="span--1-1  span--2-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--2-5--m</p></div>
        </div>
        <div class="span--1-1  span--3-5--m">
            <div style="background: #e0e0e0; width: 100%; margin-bottom: 30px; padding: 10px;"><p>span--1-1  span--3-5--m</p></div>
        </div>
    </div>

    <h2>Complex Nesting</h2>

    
    <div class="grid">
        <div class="span--1-1  span--1-5--m">
            <div style="background: #1abc9c; width: 100%; margin-bottom: 30px;">
                <h3>1/5</h3>
                <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
        <div class="span--1-1  span--3-5--m">
            <div style="background: #1abc9c; width: 100%; margin-bottom: 30px;">
                <h3>3/5</h3>

                <div class="grid">
                    <div class="span--1-2">
                        <div style="background: #e74c3c; width: 100%; margin-bottom: 30px;">
                            <h3>1/2</h3>
                           <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                        </div>
                    </div>
                    <div class="span--1-2">
                        <div style="background: #e74c3c; width: 100%; margin-bottom: 30px;">
                            <h3>1/2</h3>
                            <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="span--1-3">
                        <div style="background: #f39c12; width: 100%; margin-bottom: 30px;">
                            <h3>1/3</h3>
                            <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                        </div>
                    </div>
                    <div class="span--2-3">
                        <div style="background: #f39c12; width: 100%; margin-bottom: 30px;">
                            <h3>2/3</h3>

                            <div class="grid">
                                <div class="span--1-2">
                                    <div style="background: #f1c40f; width: 100%; margin-bottom: 30px;">
                                        <h3>1/2</h3>
                                        <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                                    </div>
                                </div>
                                <div class="span--1-2">
                                    <div style="background: #f1c40f; width: 100%; margin-bottom: 30px;">
                                        <h3>1/2</h3>
                                        <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                                    </div>
                                </div>

                                <div class="span--1-1">
                                    <div style="background: #9b59b6; width: 100%; margin-bottom: 30px;">
                                        <h3>1/1</h3>
                                        <p style="font-size: 12px;">Lorem ipsum dolar sit amet.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
         <div class="span--1-1  span--1-5--m">
            <div style="background: #1abc9c; width: 100%; margin-bottom: 30px;">
                <h3>1/5</h3>
                <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
    </div>


    <!-- Headings -->

    <h1>Headings</h1>
    <hr><br>

    <h1>Heading 1 (h1)</h1>
    <h2>Heading 2 (h2)</h2>
    <h3>Heading 3 (h3)</h3>

    <!-- Headings + text -->

    <h1>Headings &amp; Text</h1>
    <hr><br>

    <h1>Heading 1 (h1)</h1>
    <p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

    <h2>Heading 2 (h2)</h2>
    <p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

    <h3>Heading 3 (h3)</h3>
    <p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

    <!-- Images -->

    <h1>Images</h1>
    <hr><br>

    <div class="grid">
        <div class="span--1-1  span--1-2--m">
            <figure>
                <img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH">
            </figure>
        </div>
        <div class="span--1-1  span--1-2--m">
            <figure>
                <img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH">
                <figcaption>With <del>cat</del> caption</figcaption>
            </figure>
        </div>
    </div>

    

    <!-- Buttons -->

    <!-- Forms -->

    <h1>Forms</h1>
    <hr><br>

    <form>
        <div class="grid">
            <div class="span--1-1  span--1-2--m">
                <div>
                    <label>First Name</label>
                    <input type="text" name="name">
                </div>
            </div>

            <div class="span--1-1  span--1-2--m">
                <div>
                <label>Last Name</label>
                <input type="text" name="name">
                </div>
            </div>

            <div class="span--1-1  span--1-2--m">
                <div>
                    <label>Age</label>
                    <input type="number" min="12" max="100" step="2" value="21">
                </div>
            </div>

            <div class="span--1-1  span--1-2--m">
                <div>
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <div class="span--1-1">
                <div>
                    <label>Description</label>
                    <textarea></textarea>
                </div>
            </div>
        </div>

        <input type="submit" name="confirm" value="Confirm" class="btn">
        <input type="submit" name="confirm" value="Cancel" class="btn">
    </form>

</div>