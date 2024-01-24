<div
  class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-7.5 pb-5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
  <div>
    <h3 class="text-xl font-bold text-black dark:text-white">
      Visitors Analytics
    </h3>
  </div>
  <div>
      <x-splade-data :default="$chart4">
          <apexchart
              :width="data.width"
              :height="data.height"
              :type="data.type"
              :options="data.options"
              :series="data.series"
          />
      </x-splade-data>
  </div>
</div>
