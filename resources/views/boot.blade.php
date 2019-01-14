@extends('layouts.app')
@section('content')
<div class="container" style="direction:ltr;">
<main class="col-12 py-md-3 pl-sm-5 bd-content" style="font-size:1.8em;" role="main">
    <h1>Spacing</h1>  
    <hr>      
        
    <h2 id="how-it-works"><div>How it works<a class="anchorjs-link " href="#how-it-works" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h2>

<p>Assign responsive-friendly <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code class="p3-5 p-2 rounded">.25rem</code> to <code class="p3-5 p-2 rounded">3rem</code>.</p>

<h2 id="notation"><div>Notation<a class="anchorjs-link " href="#notation" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h2>

<p>Spacing utilities that apply to all breakpoints, from <code class="p3-5 p-2 rounded">xs</code> to <code class="p3-5 p-2 rounded">xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code class="p3-5 p-2 rounded">min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>

<p>The classes are named using the format <code class="p3-5 p-2 rounded">{property}{sides}-{size}</code> for <code class="p3-5 p-2 rounded">xs</code> and <code class="p3-5 p-2 rounded">{property}{sides}-{breakpoint}-{size}</code> for <code class="p3-5 p-2 rounded">sm</code>, <code class="p3-5 p-2 rounded">md</code>, <code class="p3-5 p-2 rounded">lg</code>, and <code class="p3-5 p-2 rounded">xl</code>.</p>

<p>Where <em>property</em> is one of:</p>

<ul>
<li><code class="p3-5 p-2 rounded">m</code> - for classes that set <code class="p3-5 p-2 rounded">margin</code></li>
<li><code class="p3-5 p-2 rounded">p</code> - for classes that set <code class="p3-5 p-2 rounded">padding</code></li>
</ul>

<p>Where <em>sides</em> is one of:</p>

<ul>
<li><code class="p3-5 p-2 rounded">t</code> - for classes that set <code class="p3-5 p-2 rounded">margin-top</code> or <code class="p3-5 p-2 rounded">padding-top</code></li>
<li><code class="p3-5 p-2 rounded">b</code> - for classes that set <code class="p3-5 p-2 rounded">margin-bottom</code> or <code class="p3-5 p-2 rounded">padding-bottom</code></li>
<li><code class="p3-5 p-2 rounded">l</code> - for classes that set <code class="p3-5 p-2 rounded">margin-left</code> or <code class="p3-5 p-2 rounded">padding-left</code></li>
<li><code class="p3-5 p-2 rounded">r</code> - for classes that set <code class="p3-5 p-2 rounded">margin-right</code> or <code class="p3-5 p-2 rounded">padding-right</code></li>
<li><code class="p3-5 p-2 rounded">x</code> - for classes that set both <code class="p3-5 p-2 rounded">*-left</code> and <code class="p3-5 p-2 rounded">*-right</code></li>
<li><code class="p3-5 p-2 rounded">y</code> - for classes that set both <code class="p3-5 p-2 rounded">*-top</code> and <code class="p3-5 p-2 rounded">*-bottom</code></li>
<li>blank - for classes that set a <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> on all 4 sides of the element</li>
</ul>

<p>Where <em>size</em> is one of:</p>

<ul>
<li><code class="p3-5 p-2 rounded">0</code> - for classes that eliminate the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> by setting it to <code class="p3-5 p-2 rounded">0</code></li>
<li><code class="p3-5 p-2 rounded">1</code> - (by default) for classes that set the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> to <code class="p3-5 p-2 rounded">$spacer * .25</code></li>
<li><code class="p3-5 p-2 rounded">2</code> - (by default) for classes that set the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> to <code class="p3-5 p-2 rounded">$spacer * .5</code></li>
<li><code class="p3-5 p-2 rounded">3</code> - (by default) for classes that set the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> to <code class="p3-5 p-2 rounded">$spacer</code></li>
<li><code class="p3-5 p-2 rounded">4</code> - (by default) for classes that set the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> to <code class="p3-5 p-2 rounded">$spacer * 1.5</code></li>
<li><code class="p3-5 p-2 rounded">5</code> - (by default) for classes that set the <code class="p3-5 p-2 rounded">margin</code> or <code class="p3-5 p-2 rounded">padding</code> to <code class="p3-5 p-2 rounded">$spacer * 3</code></li>
<li><code class="p3-5 p-2 rounded">auto</code> - for classes that set the <code class="p3-5 p-2 rounded">margin</code> to auto</li>
</ul>

<p>(You can add more sizes by adding entries to the <code class="p3-5 p-2 rounded">$spacers</code> Sass map variable.)</p>

<h2 id="examples"><div>Examples<a class="anchorjs-link " href="#examples" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h2>

<p>Here are some representative examples of these classes:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.mt-0</span> <span class="p">{</span>
<span class="nl">margin-top</span><span class="p">:</span> <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.ml-1</span> <span class="p">{</span>
<span class="nl">margin-left</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer</span> <span class="o">*</span> <span class="mi">.25</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.px-2</span> <span class="p">{</span>
<span class="nl">padding-left</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer</span> <span class="o">*</span> <span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer</span> <span class="o">*</span> <span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.p-3</span> <span class="p">{</span>
<span class="nl">padding</span><span class="p">:</span> <span class="nv">$spacer</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h3 id="horizontal-centering"><div>Horizontal centering<a class="anchorjs-link " href="#horizontal-centering" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h3>

<p>Additionally, Bootstrap also includes an <code class="p3-5 p-2 rounded">.mx-auto</code> class for horizontally centering fixed-width block level content—that is, content that has <code class="p3-5 p-2 rounded">display: block</code> and a <code class="p3-5 p-2 rounded">width</code> set—by setting the horizontal margins to <code class="p3-5 p-2 rounded">auto</code>.</p>

<div class="bd-example">
<div class="mx-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
  Centered element
</div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mx-auto"</span> <span class="na">style=</span><span class="s">"width: 200px;"</span><span class="nt">&gt;</span>
Centered element
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
      </main>
    </div>
@endsection
