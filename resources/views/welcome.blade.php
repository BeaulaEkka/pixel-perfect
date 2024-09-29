<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
                <x-tag-card></x-tag-card>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="flex flex-col mt-4 space-y-4">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>

    </div>
</x-layout>
