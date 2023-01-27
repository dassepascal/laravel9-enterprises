<?php

namespace App\Observers;

use App\Models\Enterprise;
use Illuminate\Support\Str;

class EnterpriseObserver
{
    /**
     * Handle the Enterprise "created" event.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return void
     */
    public function created(Enterprise $enterprise)
    {
        $enterprise->slug = Str::slug($enterprise->name,'-');
        $enterprise->save();
    }

    /**
     * Handle the Enterprise "updated" event.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return void
     */
    public function updated(Enterprise $enterprise)
    {
        //
    }

    /**
     * Handle the Enterprise "deleted" event.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return void
     */
    public function deleted(Enterprise $enterprise)
    {
        //
    }

    /**
     * Handle the Enterprise "restored" event.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return void
     */
    public function restored(Enterprise $enterprise)
    {
        //
    }

    /**
     * Handle the Enterprise "force deleted" event.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return void
     */
    public function forceDeleted(Enterprise $enterprise)
    {
        //
    }
}
