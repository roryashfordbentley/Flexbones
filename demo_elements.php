<div class="wrapper">
    
    <h1>Grid</h1>
    <hr><br>

    <div class="grid">
        <div class="span--1-2--m  span--1-4--l">
            <div style="background: #e0e0e0; margin-bottom: 30px; padding: 10px;"><p>span--6-12--m  span--3-12--l</p></div>
        </div>

        <div class="span--1-2--m  span--1-4--l">
            <div style="background: #e0e0e0; margin-bottom: 30px; padding: 10px;"><p>span--6-12--m  span--3-12--l</p></div>
        </div>

        <div class="span--1-2--m  span--1-4--l">
            <div style="background: #e0e0e0; margin-bottom: 30px; padding: 10px;"><p>span--6-12--m  span--3-12--l</p></div>
        </div>

        <div class="span--1-2--m  span--1-4--l">
            <div style="background: #e0e0e0; margin-bottom: 30px; padding: 10px;"><p>span--6-12--m  span--3-12--l</p></div>
        </div>
    
    </div>

    <!-- Headings -->

    <h1>Headings</h1>
    <hr><br>

    <h1>Heading 1 (h1)</h1>
    <h2>Heading 2 (h2)</h2>
    <h3>Heading 3 (h3)</h3>
    <h4>Heading 4 (h4)</h4>

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
        <div class="span--6-12--m">
            <figure>
                <a href="#"><img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH"></a>
            </figure>
        </div>
        <div class="span--6-12--m">
            <figure>
                <img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH">
                <figcaption>With <del>cat</del> caption</figcaption>
            </figure>
        </div>
    </div>

    

    <!-- Buttons -->

    <h1>Buttons</h1>
    <hr><br>

    <p>This paragraph of text contains a <a href="#" class="btn btn--default btn--inline">button</a> that you can press and everything will be ok. By adding a little extra text we can see how this looks when presented over multiple lines</p>

    <p>
        <button class="btn btn--default btn--medium">
            Default
        </button>

        <button class="btn btn--success btn--medium">
            Success
        </button>

        <button class="btn btn--warning btn--medium">
            Warning
        </button>

        <button class="btn btn--error btn--medium">
            Error
        </button>

        <button class="btn btn--disabled btn--medium">
            Disabled
        </button>
    </p>
    <p>
        <button class="btn btn--default btn--small">
            Small
        </button>

        <button class="btn btn--default btn--medium">
            Medium
        </button>

        <button class="btn btn--default btn--large">
            Large
        </button>
    </p>
    <p>
        <button class="btn btn--default btn--large btn--block">
            Block Button
        </button>
    </p>

    <!-- Forms -->

    <h1>Forms</h1>
    <hr><br>

    <div class="flexform">
        <form>
            <div class="grid">
                <div class="col--one-whole  col--one-half--m">
                    <label>First Name</label>
                    <input type="text" name="name">
                </div>

                <div class="col--one-whole  col--one-half--m">
                    <label>Last Name</label>
                    <input type="text" name="name">
                </div>

                <div class="col--one-whole  col--one-half--m">
                    <label>Age</label>
                    <input type="number" min="12" max="100" step="2" value="21">
                </div>

                <div class="col--one-whole  col--one-half--m">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <div>
                <label>Description</label>
                <textarea></textarea>
            </div>

            <div class="flexform-group">
                <input type="submit" name="confirm" value="Confirm" class="btn btn--success btn--medium">
                <input type="submit" name="confirm" value="Cancel" class="btn btn--error btn--medium">
            </div>
        </form>
    </div>
</div>