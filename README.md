   <main>
        @foreach ($aulas as $aula)
            <x-card-aula :title="$aula['title']" :text="$aula['title']"/>
        @endforeach
    </main>