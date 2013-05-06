<div class="container">
    <div class="row">
        <h1>Tests</h1>
        
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th width="10">#</th>
                <th>Test Name</th>
                <th style="text-align: center">Error</th>
                <th style="text-align: center" width="100">Passed</th>
            </thead>
            
            <tbody>
                {foreach from=$test_results item='item' name="test"}
                <tr>
                    <td>{$smarty.foreach.test.iteration}</td>
                    <td>{$item.title|escape:'html'}</td>
                    <td>{$item.error_msg|escape:'html'}</td>
                    <td style="text-align: center">{if $item.passed eq 1} <font color="#5bb75b">Passed</font> {else} <font color="#bd362f">Not passed</font>{/if}</td>
                </tr>
            	{/foreach}
            </tbody>
        
        </table>
    </div>
</div>