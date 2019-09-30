<table style="border:1px solid black; width:100%">
          @foreach ($cakes as $cake)
          <tr>
            <td><img width="30%" class="img-circle" src="/images/{{ $cake->cake_image }}"></td>
          </tr>
          @endforeach
        </table>
        {{-- {{ URL::asset('F:\pkb\public\/images\'.$cake->cake_name) }} --}}