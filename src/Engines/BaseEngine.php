<?php

namespace Yajra\Datatables\Engines;

use Yajra\DataTables\DataTableAbstract;

class BaseEngine extends DataTableAbstract
{
    /**
     * Get results.
     *
     * @return mixed
     */
    public function results()
    {
        // TODO: Implement results() method.
    }

    /**
     * Count results.
     *
     * @return integer
     */
    public function count()
    {
        // TODO: Implement count() method.
    }

    /**
     * Count total items.
     *
     * @return integer
     */
    public function totalCount()
    {
        // TODO: Implement totalCount() method.
    }

    /**
     * Perform column search.
     *
     * @return void
     */
    public function columnSearch()
    {
        // TODO: Implement columnSearch() method.
    }

    /**
     * Perform pagination.
     *
     * @return void
     */
    public function paging()
    {
        // TODO: Implement paging() method.
    }

    /**
     * Organizes works.
     *
     * @param bool $mDataSupport
     * @return \Illuminate\Http\JsonResponse
     */
    public function make($mDataSupport = true)
    {
        // TODO: Implement make() method.
    }

    /**
     * Resolve callback parameter instance.
     *
     * @return mixed
     */
    protected function resolveCallbackParameter()
    {
        // TODO: Implement resolveCallbackParameter() method.
    }

    /**
     * Perform default query orderBy clause.
     */
    protected function defaultOrdering()
    {
        // TODO: Implement defaultOrdering() method.
    }

    /**
     * Perform global search for the given keyword.
     *
     * @param string $keyword
     */
    protected function globalSearch($keyword)
    {
        // TODO: Implement globalSearch() method.
    }

    /**
     * Append debug parameters on output.
     *
     * @param  array $output
     * @return array
     */
    protected function showDebugger(array $output)
    {
        // TODO: Implement showDebugger() method.
    }
}
