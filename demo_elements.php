<style>
    .demo-block{
        color: #fff;
        padding: 1rem;
        text-align: center;
        /*height: 8rem;*/
        /*border-top: 1px solid #00e1fb;
        border-bottom: 1px solid #6f10d9;

        background-image: linear-gradient(to bottom right,#00d2ff, #3a7bd5),linear-gradient(to bottom right,#00d2ff, #3a7bd5);
        background-size:1px 100%;
        background-position:0 0, 100% 0;
        background-repeat:no-repeat;*/

        background-image: linear-gradient(to bottom right,#00d2ff, #3a7bd5);
        border-radius: 4px;
        
    }

</style>

<div class="wrapper">
    
    <h1>Grid</h1>
    <hr><br>
    <p>The tests are based on the OOCSS <a href="http://oocss.org/grids_docs.html">litmus test</a></p>
    <p>To demonstrate the responsive potential of the grid each element will be set to span a full column width at the mobile breakpoint. You can control it however you like and the grid doesn't require an element to span a whole column.</p>

    <h2>Basic Grid layout structure</h2>

    <h3>Halves</h3>

    <div class="grid">
        <div class="span--1-1  span--1-2--m">
            <div class="demo-block"><p>span--1-1<br> span--1-2--m</p></div>
        </div>
        <div class="span--1-1  span--1-2--m">
            <div class="demo-block"><p>span--1-1<br> span--1-2--m</p></div>
        </div>
    </div>


    <h3>Thirds</h3>

    
    <div class="grid">
        <div class="span--1-1  span--1-3--m">
            <div class="demo-block"><p>span--1-1<br> span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--1-3--m">
            <div class="demo-block"><p>span--1-1<br> span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--1-3--m">
            <div class="demo-block"><p>span--1-1<br> span--1-3--m</p></div>
        </div>
         <div class="span--1-1  span--1-3--m">
            <div class="demo-block"><p>span--1-1<br> span--1-3--m</p></div>
        </div>
        <div class="span--1-1  span--2-3--m">
            <div class="demo-block"><p>span--1-1<br> span--2-3--m</p></div>
        </div>
    </div>

     <h3>Quarters</h3>

    
    <div class="grid  grid--equal-height">
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--2-4--m">
            <div class="demo-block"><p>span--1-1<br> span--2-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div> 
        <div class="span--1-1  span--3-4--m">
            <div class="demo-block"><p>span--1-1<br> span--3-4--m</p></div>
        </div>
    </div>

    <h3>Fifths</h3>

    <div class="grid  grid--equal-height">
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
        <div class="span--1-1  span--1-5--m">
            <div class="demo-block"><p>span--1-1<br> span--1-5--m</p></div>
        </div>
         <div class="span--1-1  span--2-5--m">
            <div class="demo-block"><p>span--1-1<br> span--2-5--m</p></div>
        </div>

        <div class="span--1-1  span--2-5--m">
            <div class="demo-block"><p>span--1-1<br> span--2-5--m</p></div>
        </div>
        <div class="span--1-1  span--3-5--m">
            <div class="demo-block"><p>span--1-1<br> span--3-5--m</p></div>
        </div>
    </div>

    <h3>Sevenths</h3>

    <div class="grid">
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
        <div class="span--1-1  span--1-7--m">
            <div class="demo-block"><p>span--1-1<br> span--1-7--m</p></div>
        </div>
    </div>

    <h2>Additional Grid functions</h2>
    
    <h3>Push classes</h3>

    <p>Push classes adds a left margin that is equivilant to a unit (or multipleunits) of a grid.</p>

     <div class="grid">
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m  push--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m<br> push--1-4--m</p></div>
        </div>
    </div>

    <h3>Omega classes</h3>

    <p>Omega classes allow us to define a grid item that will appear after all the others. Omega must be applied per breakpoint, it does not scale up for obvious reasons.</p>

     <div class="grid">
        <div class="span--1-1  span--1-4--m">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m</p></div>
        </div>
        <div class="span--1-1  span--1-4--m  span--omega--m  span--omega--l">
            <div class="demo-block"><p>span--1-1<br> span--1-4--m<br> push--1-4--m</p></div>
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