{extends file="../templates/main.html"}

{block name=footer}Autor: Kamil Horzela{/block}


<h2 class="content-head is-center">Prosty kalkulator</h2>

{block name=content}
<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form method="post" action="#">
                <div class="form">
                    <input type="text" name="value" id="value" value="{$value}" placeholder="Kwota" />
                    <input type="text"  name="years" id="years" value="{$years}" placeholder="Okres spłaty w latach" />
                    <input type="text"  name="percent" id="percent" value="{$percent}" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </div>
            </form>

            
            {if isset($messages)}
            {if count ( $messages ) > 0} 
                <ol class="messbox">
            {foreach $messages as $msg}
            <ul class="alt">
                <li> {$msg} </li>
            </ul>
            {/foreach}
            </ol>
            {/if}
            {/if}
        


            {if isset($result)}
                <ol class="messbox">
            <h4>Miesięczna rata</h4>
            <p class="res">
                {$result|string_format:"%.2f"}
                zł
            </p>
            </ol>
            {/if}     


        </section>
    </div>
</div>
{/block}

{block name=footer}
<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

{/block}

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
